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

		    #if(!empty($_POST["quantity"])) {
			    $product = $db_handle->runQuery("SELECT * FROM products WHERE product_id=" . $_GET["code"]);
			    $itemArray = array($product["product_id"]=>array('product_name'=>$product["product_name"], 'product_id'=>$product["product_id"], 'quantity'=>1, 'unit_price'=>$product["unit_price"]));
			
                if(!empty($_SESSION["cart_item"])) {
                    if(in_array(strval($product["product_id"]),array_keys($_SESSION["cart_item"]))) {
                        $_SESSION["cart_item"][strval(product["product_id"])]['quantity'] += 1;
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            #}
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;	
    }
}

foreach ($_SESSION["cart_item"] as $item) {
?>
    <tr>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["product_name"]; ?></strong></td>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["product_id"]; ?></td>
        <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
        <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["unit_price"]; ?></td>
    </tr>
<?php
}
?>

<?php include_once 'includes/footer.php' ?>