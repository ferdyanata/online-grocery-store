<!-- 
*  @author Ferdy Anata, Zhengjie Huang
 * Created on: 22/04/2018
 * Description: When users click on a product from the menu, the information will show on the top right hand of the web page.
 *
-->

<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>

<p>This is the view-products file</p>

<!-- @desc Using target attribute allows us to send data from any submit input to another page,
    in one page. 
    'index-get-products' is a name that is set in index.php that refers to the frame we're sending
    data to. 
    Source: https://css-tricks.com/snippets/html/post-data-to-an-iframe/
    -->
<form action="get-products.php" method="GET" target="index-get-products">
<div id="container">
        <div id="menu">
            <ul id="menuBar">
                <li class="mainLinks">
                    <img href="#" src= "../assets/img/fresh-food.png">
                    <ul class="sub">
                        <li><input type="image" name="productId" value="3002" src="../assets/img/3002.jpg"></li>      
                        <li>
                            <a href="#">Chedder Cheese</a>
                            <ul class="subSub">
                                <li><a href="#">500 Gram </a></li>
                                <li><a href="#">1000 Gram </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Navel Oranges</a></li>

                        <li><a href="#">Bananas</a></li>

                        <li><a href="#">Grapes</a></li>

                        <li><a href="#">Apples</a></li>

                        <li><a href="#">Peaches</a></li>
                    
                    </ul>

                </li>

                 <li class="mainLinks">
                    <img href="#" src="../assets/img/frozen-food.png">
            
                    <ul id="sub00" class="sub">
                    
                        <li><a href="#">Sea Food</a>

                            <ul id="sub01" class="subSub">
                    
                                <li><a href="#">Fish Fingers(large)</a></li>
                            
                                <li><a href="#">Fish Fingers(small)</a></li>
                            
                                <li><a href="#">Shelled Prawns</a></li>		

                            </ul>
                        </li>
                        <li><a href="#">Milk Products</a>
                    
                            <ul id="sub02" class="subSub">
                    
                                <li><a href="#">Tub Ice Cream(1L)</a></li>
                            
                                <li><a href="#">Tub Ice Cream(2L)</a></li>		

                            </ul>
                    
                        </li>
                        
                        <li><a href="#">Other</a>
                    
                            <ul id="sub03" class="subSub">
                        
                                <li><a href="#">Hamburger Patties</a></li>
                            
                            </ul>
                        
                        </li>
                    
                    </ul>                    
                </li>
        

                <li class="mainLinks">
                    <img href="#" src="../assets/img/beverages.png">

                    <ul class="sub">

                        <li><a href="#">Coffee</a>

                            <ul class="subSub">

                                <li><a href="#">200 Gram </a></li>

                                <li><a href="#">500 Gram </a></li>

                            </ul>
                        
                        </li>
                                                
                        <li><a href="#">Earl Grey Tea Bags</a>

                            <ul class="subSub">

                                <li><a href="#">Pack 25 </a></li>

                                <li><a href="#">Pack 100 </a></li>

                                <li><a href="#">Pack 200 </a></li>

                            </ul>
                        
                        </li>
                        
                        <li><a href="#">Chocolate bar</a></li>
                    
                    </ul>

                </li>
                
                <li class="mainLinks">
                    <img href="#" src="../assets/img/home-health.png" >
                
                    <ul class="sub">

                        <li><a href="#">Bath Soap</a></li>

                        <li><a href="#">Panadol</a>

                            <ul class="subSub">

                                <li><a href="#">Pack 24 </a></li>

                                <li><a href="#">Bottle 50 </a></li>

                            </ul>
                        
                        </li>

                        <li><a href="#">Washing powder</a></li>
                                                
                        <li><a href="#">Garbage Bags</a>

                            <ul class="subSub">

                                <li><a href="#">small(pack10) </a></li>

                                <li><a href="#">large(pack50) </a></li>

                            </ul>
                        </li>
                        
                        <li><a href="#">Laundry Bleach</a></li>
                    
                    </ul>

                </li>

                <li class="mainLinks">
                    <img href="#" src="../assets/img/pet-food.png" > 
                
                    <ul id="sub09" class="sub">
                    
                        <li><a href="#">Bird Food</a></li>
                        
                        <li><a href="#">Cat Food</a></li>
                        
                        <li><a href="#">Dry Dog Food</a>
                            <ul class="subSub">

                                <li><a href="#"> 1 kg Pack </a></li>

                                <li><a href="#"> 5 kg Pack </a></li>

                            </ul>
                        </li>		
                    
                        <li><a href="#">Fish Food</a></li>

                    </ul>
                
                </li>
        
            </ul>
        
            </div>  
    </div>
</form>

<?php include_once 'includes/footer.php' ?>