<?php include_once 'config.php' ?>
<!-- query product details
-->
<?php 

$productId = (isset($_GET['productId']) ? $_GET['productId'] : null); 
 
$query_string = 'SELECT * FROM products WHERE product_id='.$productId;

// $result = mysqli_result($query_string);
$result = mysqli_query($connection, $query_string);
$row = mysqli_fetch_assoc($result);
 

echo  "product name:".$row['product_name']."<br>unit price: ".$row['unit_price'].
"<br>unit quantity: ".$row['unit_quantity']."<br>in stock: ".$row['in_stock'];
 
mysqli_close($connection);
?>