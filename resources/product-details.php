<?php include_once 'config.php' ?>

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

echo "<table>" .
        "<tr>" .
        "<td style='font-weight: bold;'>" . $row['product_name'] . "</td>" .
        "</tr>".
        "<tr>" .         
        "<td>$". $row['unit_price'] . "</td>" .
        "</tr>".
     "</table>";
 
mysqli_close($connection);

?>