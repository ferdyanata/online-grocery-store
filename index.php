<!--
* @author Ferdy Anata
* Created on: 22/04/2018
* Description: The welcome file that divides the frames into three
-->

<?php //include 'resources/config.php' ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grocery Store</title>
</head>
<!-- 
    Reference: To help create the frames, we used this guide from 
     https://html.com/frames/#Creating_Horizontal_Rows 
-->
<frameset id="leftFrame" cols="*, *" frameborder="0">
    <!-- Link to products menu -->
    <frame src="resources/view-products.php" frameborder="0">
    <frameset rows="*, *">
        <!-- Link to product details when clicked -->
        <frameset id="topRightFrame" rows="*">
            <frame src="resources/get-products.php" frameborder="0" name="my-get-products">
        </frameset>
        <!-- Link to when users add items to cart -->
        <frameset id="bottomRightFrame" rows="*" frameborder="0" name="my-view-cart">
            <frame src="resources/view-cart.php">              
        </frameset>
    </frameset>
</frameset>
</html>