<!-- 
*  @author Ferdy Anata
 * Created on: 22/04/2018
 * Description: When users click on a product from the menu, the information will show on the top right hand of the web page.
 *
-->

<?php include 'resources/templates/header.php' ?>

<p>This is the view-products file</p>
<div id="container">
		
        <div id="menu">

            <ul id="menuBar">
        
                <li class="mainLinks"><a href="#">Home</a></li>
                
                <li class="mainLinks"><a href="#">Products</a>
                
                    <ul id="sub00" class="sub">
                    
                        <li><a href="#">Motherboards</a></li>
                    
                        <li><a href="#">Cooling Options</a>
                    
                            <ul id="sub01" class="subSub">
                    
                                <li><a href="#">Fans</a></li>
                            
                                <li><a href="#">Liquid Cooling</a></li>
                            
                                <li><a href="#">Thermal Paste</a></li>		

                            </ul>
                    
                        </li>
                        
                        <li><a href="#">Graphics Cards</a></li>
                    
                        <li><a href="#">Accessories</a>
                    
                            <ul id="sub02" class="subSub">
                        
                                <li><a href="#">Speakers</a></li>
                                
                                <li><a href="#">Webcams</a></li>
                                
                                <li><a href="#">Headphones</a></li>
                            
                            </ul>
                        
                        </li>
                    
                    </ul>
                    
                </li>
                
                <li class="mainLinks"><a href="#">Support</a></li>
                
                <li class="mainLinks"><a href="#">Community</a>
                
                    <ul id="sub03" class="sub">
                    
                        <li><a href="#">Forums</a></li>
                        
                        <li><a href="#">Profile</a></li>
                        
                        <li><a href="#">Messaging</a></li>		
                    
                    </ul>
                
                </li>
                
                <li class="mainLinks"><a href="#">Partners</a></li>		
        
            </ul>
            
            </div>
    
    </div>

<?php include 'resources/templates/footer.php' ?>