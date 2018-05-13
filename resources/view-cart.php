<!--
* @author Ferdy Anata, Zhengjie Huang
* Created on: 27/04/2018
* Description: Upon clicking the 'add button', products will be added to the cart.
-->

<?php require_once 'includes/db-controller.php' ?>
<?php include_once 'includes/header.php' ?>

<?php
session_start();
// DBController is a another connection to the database, but it is formed 
// as classes to make product queries more readable.
$db_handle = new DBController();
// Checks for action attribute in query-product-details is not empty
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        // action attribute's value =add&code={$productId}
	    case "add":
		    if(!empty($_POST["quantity"])) {
                // $_GET['code'] refers to the value in the action attribute of query-product-details
			    $product = $db_handle->runQuery("SELECT * FROM products WHERE product_id=" . $_GET["code"]);
			    $itemArray = array(
                    $product["product_id"]  =>  array(
                                                'product_name'  =>  $product["product_name"],
                                                'product_id'    =>  $product["product_id"],
                                                'unit_quantity' =>  $product["unit_quantity"],
                                                'quantity'      =>  $_POST["quantity"], 
                                                'unit_price'    =>  $product["unit_price"]));
                
                // Check if cart is not empty so we can return all keys in arrays
                if(!empty($_SESSION["cart_item"])) {
                    // Check if product_id exists in the array and returns all keys in array
                    if(in_array($product["product_id"], array_keys($_SESSION["cart_item"]))) {
                        // Updates the quantity in the cart, otherwise it will append to next line
                        foreach ($_SESSION["cart_item"] as $key => $val) {
                            if ($product["product_id"] == $key) {
                                $_SESSION["cart_item"][$key]['quantity'] += $_POST["quantity"];
                                // Display message if the user tries to order more than what is available in stock
                                if ($_SESSION["cart_item"][$key]['quantity'] > $product["in_stock"]) {
                                    echo "<script type='text/javascript'>swal('Oops!','Not enough in stock!', 'warning')</script>";
                                    $_SESSION["cart_item"][$key]['quantity'] = $product["in_stock"];
                                }
                            }
                        }
                    } else {
                        // If cart is empty then add and display on bottom right frame
                        $_SESSION["cart_item"][$product["product_id"]] = array(
                                                'product_name'  =>  $product["product_name"],
                                                'product_id'    =>  $product["product_id"], 
                                                'unit_quantity' =>  $product["unit_quantity"],
                                                'quantity'      =>  $_POST["quantity"], 
                                                'unit_price'    =>  $product["unit_price"]);
                    }
                }
                else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;	
    }
}

echo "<h2 class='ui dividing header'>Your cart</h2>";
// Loops through the array in cart and display it in bottom right frame
if(isset($_SESSION["cart_item"])) {
    echo "
        <div class='ui vertically divided grid'>
            <div class='two column row'>
                    <div class='column'>
                        <div  class='item' id='narrowitem'>
                                <div class='quantity' id='deshead'> 
                                    Products
                                </div> 
                                <div class='quantity' id='quantityhead'>
                                    Quantity
                                </div>
                                <div class='quantity' id='quantityhead'>
                                    Price
                                </div>
                            </div>";
    foreach ($_SESSION["cart_item"] as $item) {
                echo "<div class='item'>
                            <div class='description'> 
                                <span>" . $item['product_name'] ."</span>
                                <span>" . $item['unit_quantity'] ."</span>
                                <span>$". $item['unit_price'] ."</span>
                            </div> 
                            <div class='quantity'>"
                                .$item['quantity'].   
                            "</div>
                            <div class='quantity'>$".
                                $item['unit_price']*$item['quantity']."
                            </div>
                        </div>";
    }
}

if(!isset($_SESSION["cart_item"])) {
    echo "<div>Your cart is currently empty.</div>";
}

if(!isset($_SESSION["cart_item"])) {
        echo "<div class='column'>
                <a href='#'><button class='positive ui button' 
                onclick='javascript:displayWarning()'><i class='cart arrow down icon'></i>Checkout</button></a>
              </div>";
} else {
        echo "  </div>
                <div class='column'>
                    <a href='purchase-form.php' target='_top'><button class='positive ui button'>
                    <i class='cart arrow down icon'></i>Checkout</button></a>
                    <a href='view-cart.php?action=empty'> <button class='ui red button'>
                    <i class='ban icon'></i> Clear cart </button></a>
                </div>
            </div>
        </div>";
    }
?>

<?php include_once 'includes/footer.php' ?>