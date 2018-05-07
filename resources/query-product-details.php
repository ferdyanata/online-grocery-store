<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>
<!-- 
    @desc
    Creates a query from the products table for product_name and unit_price
    based on the productId.
-->
<?php 

$productId = (isset($_GET['productId']) ? $_GET['productId'] : null); 
 
$query_string = 'SELECT * FROM products WHERE product_id='.$productId;
$result = mysqli_query($connection, $query_string);
$row = mysqli_fetch_assoc($result);



echo
"<form action='view-cart.php?action=add&code={$productId}' method='POST' target='frame-view-cart' onsubmit='return validateQuantity(".$row['in_stock'].")'>" .
    "<table>"  .
        "<tr>" .
        "<td style='font-weight: bold;'>" . $row['product_name']  . "</td>" .
        "<td style='font-weight: bold;'>" . $row['unit_quantity'] . "</td>" . 
        "</tr>".
        "<tr>" .         
        "<td>$". $row['unit_price'] . "</td>" .
        "</tr>".
    "</table>" .
    // Default quality in the quantity box
    "<div><input type='text' name='quantity' id='quantity_box' value='1'></div>".
    "<div><input type='submit' value='Add to cart'></div>"    .
"</form>";
      
mysqli_close($connection);

?>

<?php include_once 'includes/footer.php' ?>