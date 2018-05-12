<!--
* @author Ferdy Anata
* Created on: 22/04/2018
* Description: Displays products on the left hand side of the web page where users will be able to choose amongst five categories.
-->

<?php require_once 'includes/db-controller.php' ?>
<?php include_once 'includes/header.php' ?>

<?php
session_start();
$db_handle = new DBController();
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
	    case "add":
		    if(!empty($_POST["quantity"])) {
			    $product = $db_handle->runQuery("SELECT * FROM products WHERE product_id=" . $_GET["code"]);
			    $itemArray = array(
                    $product["product_id"]  =>  array(
                                                'product_name'  =>  $product["product_name"],
                                                'product_id'    =>  $product["product_id"],
                                                'unit_quantity' =>  $product["unit_quantity"],
                                                'quantity'      =>  $_POST["quantity"], 
                                                'unit_price'    =>  $product["unit_price"]));
			
                if(!empty($_SESSION["cart_item"])) {
                    if(in_array($product["product_id"],array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $key => $val) {
                            if ($product["product_id"] == $key) {
                                $_SESSION["cart_item"][$key]['quantity'] += $_POST["quantity"];
                                if ($_SESSION["cart_item"][$key]['quantity'] > $product["in_stock"]) {
                                    echo "<script type='text/javascript'>alert('Not enough in stock!')</script>";
                                    $_SESSION["cart_item"][$key]['quantity'] = $product["in_stock"];
                                }
                            }
                        }
                        
                    } else {
                        $_SESSION["cart_item"][$product["product_id"]] = array(
                                                'product_name'  =>  $product["product_name"],
                                                'product_id'    =>  $product["product_id"], 
                                                'unit_quantity' =>  $product["unit_quantity"],
                                                'quantity'      =>  $_POST["quantity"], 
                                                'unit_price'    =>  $product["unit_price"]);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;	
    }
}

if(isset($_SESSION["cart_item"])) {
    echo "<div id='head' class='item'>
            <div class='description'> 
                Products
            </div> 
            <div class='quantity'>
                Quantity
            </div>
            <div class='quantity'>
                Price
            </div>
          </div>";
    foreach ($_SESSION["cart_item"] as $item) {
        echo "<div class='item'>
                <div class='description'> 
                    <span>" . $item['product_name'] ."</span>
                    <span>" . $item['unit_quantity'] ."</span>
                    <span>$" . $item['unit_price'] . "</span>
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
    echo "<div> Your cart is empty now </div>";
}

echo "<a href='view-cart.php?action=empty'> <button class='ui red button' id='clear-btn'><i class='ban icon'></i> Clear cart </button></a>";

if(!isset($_SESSION["cart_item"])) {
    echo "<a href='#'><button id='checkout-btn' class='positive ui button' onclick='javascript:displayWarning()'><i class='cart arrow down icon'></i>Checkout</button></a>";
} else {
    echo "<a href='purchase-form.php' target='_top'><button id='checkout-btn' class='positive ui button'><i class='cart arrow down icon'></i>Checkout</button></a>";
}
?>

<?php include_once 'includes/footer.php' ?>