<?php include_once 'includes/header.php' ?>

<nav id="menu">
    <ul class="parent-menu">
        <li><a href="#">Fresh Food</a>
            <ul>
                <li><a href="#">Cheddar Cheese</a>
                    <ul>
                        <li value="3000" onclick="javascript:displayDetails(this.value)"><a href="#">500 gram</a></li>
                        <li value="3001" onclick="javascript:displayDetails(this.value)"><a href="#">1000 gram</a></li>
                    </ul>
                </li>
                <li value="3002" onclick="javascript:displayDetails(this.value)"><a href="#">T'Bone Steak</a></li>         
                <li value="3003" onclick="javascript:displayDetails(this.value)"><a href="#">Navel Oranges</a></li>
                <li value="3004" onclick="javascript:displayDetails(this.value)"><a href="#">Bananas</a></li>
                <li value="3006" onclick="javascript:displayDetails(this.value)"><a href="#">Grapes</a></li>
                <li value="3007" onclick="javascript:displayDetails(this.value)"><a href="#">Apples</a></li>
                <li value="3005" onclick="javascript:displayDetails(this.value)"><a href="#">Peaches</a></li>
            </ul>
        </li>
        <li><a href="#">Frozen Food</a>
            <ul>
               <li><a href="#">Sea Food</a>
                    <ul>
                        <li value="1001" onclick="javascript:displayDetails(this.value)"><a href="#">Fish Fingers(large)</a></li>
                        <li value="1000" onclick="javascript:displayDetails(this.value)"><a href="#">Fish Fingers(small)</a></li>
                        <li value="1003" onclick="javascript:displayDetails(this.value)"><a href="#">Shelled Prawns</a></li>		
                    </ul>
                </li>
                <li><a href="#">Milk Products</a>
                    <ul>
                        <li value="1004" onclick="javascript:displayDetails(this.value)"><a href="#">Tub Ice Cream(1L)</a></li>
                        <li value="1005" onclick="javascript:displayDetails(this.value)"><a href="#">Tub Ice Cream(2L)</a></li>		
                    </ul>
                </li>                        
                <li><a href="#">Other</a>            
                    <ul>                
                        <li value="1002" onclick="javascript:displayDetails(this.value)"><a href="#">Hamburger Patties</a></li>                    
                    </ul>                
                </li>
            </ul>
        </li>
        <li><a href="#">Beverages</a>
            <ul>
                <li><a href="#">Coffee</a>
                    <ul >
                        <li value="4003" onclick="javascript:displayDetails(this.value)"><a href="#">200 Gram </a></li>
                        <li value="4004" onclick="javascript:displayDetails(this.value)"><a href="#">500 Gram </a></li>
                    </ul>
                </li>               
                <li><a href="#">Earl Grey Tea Bags</a>
                    <ul >
                        <li value="4000" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 25 </a></li>
                        <li value="4001" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 100 </a></li>
                        <li value="4002" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 200 </a></li>
                    </ul>
                </li>
                <li value="4005" onclick="javascript:displayDetails(this.value)"><a href="#">Chocolate bar</a></li>
            </ul>
        </li>
        <li><a href="#">Home&Health</a>
            <ul>
                <li value="2002" onclick="javascript:displayDetails(this.value)"><a href="#">Bath Soap</a></li>
                <li><a href="#">Panadol</a>
                    <ul >
                        <li value="2000" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 24 </a></li>
                        <li value="2001" onclick="javascript:displayDetails(this.value)"><a href="#">Bottle 50 </a></li>
                    </ul>
                </li>
                <li value="2005" onclick="javascript:displayDetails(this.value)"><a href="#">Washing powder</a></li>                   
                <li ><a href="#">Garbage Bags</a>
                    <ul >
                        <li value="2003" onclick="javascript:displayDetails(this.value)"><a href="#">small(pack10) </a></li>
                        <li value="2004" onclick="javascript:displayDetails(this.value)"><a href="#">large(pack50) </a></li>
                    </ul>
                </li>
                <li value="2006" onclick="javascript:displayDetails(this.value)"><a href="#">Laundry Bleach</a></li>
            </ul>
        </li>
        <li><a href="#">Pet Food</a>
            <ul>
                <li value="5002" onclick="javascript:displayDetails(this.value)"><a href="#">Bird Food</a></li>
                <li value="5003" onclick="javascript:displayDetails(this.value)"><a href="#">Cat Food</a></li>
                <li><a href="#">Dry Dog Food</a>
                    <ul >
                        <li value="5001" onclick="javascript:displayDetails(this.value)"><a href="#"> 1 kg Pack </a></li>
                        <li value="5000" onclick="javascript:displayDetails(this.value)"><a href="#"> 5 kg Pack </a></li>
                    </ul>
                </li>		
                <li value="5004" onclick="javascript:displayDetails(this.value)"><a href="#">Fish Food</a></li>
            </ul>
        </li>
    </ul>
</nav>

<?php include_once 'includes/footer.php' ?>
