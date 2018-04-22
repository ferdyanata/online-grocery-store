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
-- Reference: To help create the frames, we used this guide from 
-- https://html.com/frames/#Creating_Horizontal_Rows 
-->
<frameset id="leftHandFrame" cols="*, *">
    <!-- Link to products menu-->
    <frame src="view-products.php">
    <frameset rows="*, *">
        <frameset id="topRightHandFrame" rows="*">
                <frame src="get-products.php">
        </frameset>
        <frameset id="bottomRightHandFrame" rows="*">
                <frame src="view-cart.php">              
        </frameset>
    </frameset>
</frameset>