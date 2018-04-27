<!--
* @author Ferdy Anata
* Created on: 22/04/2018
* Description: The welcome file that divides the frames into three
-->

<?php include_once 'resources/config.php' ?>
<?php include_once 'resources/includes/header.php' ?>

<div class="container" id="leftFrame">
    <p>This is left frame</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
        <div id="menu">
            <ul id="menuBar">
                <li class="mainLinks">
                    <img href="#" src= "assets/img/fresh-food.png">
                    <ul class="sub">
                        <li><input type="submit" name="t_bone_steak" value="T'Bone Steak"></li>    
                        <li>
                            <a href="#">Chedder Cheese</a>
                            <ul class="subSub">
                                <li><a href="#">500 Gram </a></li>
                                <li><a href="#">1000 Gram </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Navel Oranges</a></li>

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
    <frame src="resources/view-products.php" frameborder="0" name="index-view-products">
    <frameset rows="*, *">
        <!-- Link to product details when clicked -->
        <frameset id="topRightFrame" rows="*">
            <frame src="resources/get-products.php" frameborder="0" name="index-get-products">
        </frameset>
        <!-- Link to when users add items to cart -->
        <frameset id="bottomRightFrame" rows="*" frameborder="0" name="index-view-cart">
            <frame src="resources/view-cart.php">              
        </frameset>
    </frameset>
</frameset>
</html>