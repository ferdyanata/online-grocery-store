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
                        
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
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
    foreach ($_SESSION["cart_item"] as $item) {
?>
    <div id="view-cart-div">
        <tr>
            <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["product_name"]; ?></strong></td>
            <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["product_id"]; ?></td>
            <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
            <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["unit_price"]; ?></td>
        </tr>
    </div>
<?php
    }
}

if(!isset($_SESSION["cart_item"])) {
    echo "<div> Your cart is empty now </div>";
}

echo "<div> <a href='view-cart.php?action=empty'> Clear cart </a> </div>";

if(!isset($_SESSION["cart_item"])) {
    echo "<div> <button onclick='javascript:displayWarning()'><a href='#'>Checkout</a></button> </div>";
} else {
    echo "<div> <button><a href='purchase-form.php' target='_top'>Checkout</a></button> </div>";
}
?>

<?php include_once 'includes/footer.php' ?>