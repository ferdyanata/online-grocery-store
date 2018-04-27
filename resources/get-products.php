<!--
* @author Ferdy Anata
* Created on: 22/04/2018
* Description: Displays products on the left hand side of the web page where users will be able to choose amongst five categories.
-->

<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>

<p>This is the get-products file</p>

<?php 

$productId = $_GET['productId'];
echo $productId;
 
$query_string = 'SELECT * FROM products WHERE product_id='.$productId;

// $result = mysqli_result($query_string);
$result = mysqli_query($connection, $query_string);
$row = mysqli_fetch_assoc($result);
 
echo "product name:".$row['product_name']."unit price: ".$row['unit_price'];
 
?>

<?php
// Creates a new session
// session_start();

// $tBoneSteak = $_GET['t_bone_steak'];
// $query_string = "SELECT * FROM products
//                  WHERE (product_name = $tBoneSteak)";

// $result = mysqli_result( $query_string);
// $num_rows = mysqli_num_rows($result);

// if ($num_rows > 0 ) {
//     print "<table border='0'>";
//      while ( $row = mysqli_fetch_assoc($result) ) {
//          print "<tr>\n";
//          foreach ($row as $field){
//             print "\t<td>{$field}</td>\n";    
//          }
//          print "</tr>";
//     }
//     print "</table>";
// }
?>

<?php include_once 'includes/footer.php' ?>