<!--
* @author Ferdy Anata, Zhengjie Huang
* Created on: 22/04/2018
* Description: Displays products details on the top right hand side of the page upon clicking
* on the menu.
-->
<?php include_once 'includes/header.php' ?>

<!--  
    @desc 
    Display the product_name, unit_quantity and unit_price values inside the div tag.
--> 
<h2 class="ui dividing header">Selected products</h2>

<!--
    @desc
    id is usd by JS DOM to insert the product details.
-->
<div id="query-product-details"></div>

<?php include_once 'includes/footer.php' ?>