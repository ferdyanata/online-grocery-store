<!--
* @author Ferdy Anata, Zhengjie Huang
* Created on: 27/04/2018
* Description: Displays shipping address form to fill out by the user on the left frame and
* shows what the user has purchased on the right frame.
-->

<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>

<?php session_start(); ?>
<div class="ui vertically divided grid">
    <div class="two column row">
        <div class="container column">
            <form class="ui form" name="checkoutForm" id="checkoutForm" action="mail-form.php" method="POST"
                onsubmit="return validateForm()">
                <h2 class="ui dividing header">Shipping Information</h2>
                <div class="field">
                    <label>Name<span class="asterisks">*</span></label>
                    <div class="three fields">
                        <div class="field">
                            <input type="text" id="firstName" name="first-name" placeholder="First Name" size="20" maxlength="20">
                            <div id="pointingLabel"></div>
                        </div>
                        <div class="field">
                            <input type="text" id="lastName" name="last-name" placeholder="Last Name">
                        </div>
                        <div class="field">
                            <input type="text" id="email" name="email" placeholder="Email address">
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label>Billing Address<span class="asterisks">*</span></label>
                    <div class="two fields">
                        <div class="field">
                            <input type="text" id="address" name="address" placeholder="Street Address">
                        </div>
                        <div class="field">
                            <input type="text" id="suburb" name="suburb" placeholder="Suburb">
                        </div>
                    </div>
                    <div class="three fields">
                        <div class="field">
                            <label>State<span class="asterisks">*</span></label>
                            <select id="state" name="state" class="ui fluid dropdown">
                                <option value="">State</option>
                                <option value="NSW">NSW</option>
                                <option value="QLD">QLD</option>
                                <option value="SA">SA</option>
                                <option value="TAS">TAS</option>
                                <option value="VIC">VIC</option>
                                <option value="WA">WA</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="country">Country<span class="asterisks">*</span></label>
                            <div>
                                <input type="text" name="country" id="country" placeholder="Country">
                            </div>
                        </div>
                        <div class="field">
                            <label for="postcode">Postcode<span class="asterisks">*</span></label>
                            <input type="text" name="postcode" id="postcode" placeholder="Postcode">
                        </div>
                    </div>
                </div>

                <button class="ui blue button" name="submit" type="submit"><i class="credit card outline icon"></i>Purchase</button>
            </form>
        </div>
        
        <div class="column">
            <h2 class="ui dividing header">Your items</h2>
            <?php
                $totalAmount = 0;
                if(isset($_SESSION["cart_item"])) {
                    echo "<div class='item' id='narrowitem'>
                            <div class='quantity' id='deshead'> 
                                Products
                            </div> 
                            <div class='quantity' id='quantityhead'>
                                Quantity
                            </div>
                            <div class='quantity' id='quantityhead'>
                                Price
                            </div>
                          </div>";
                    foreach ($_SESSION["cart_item"] as $item) {
                    $totalAmount += $item['unit_price']*$item['quantity'];
                    echo "<div class='item'>
                            <div class='description'> 
                                <span>" . $item['product_name'] ."</span>
                                <span>" . $item['unit_quantity'] ."</span>
                                <span>$". $item['unit_price'] ."</span>
                            </div> 
                            <div class='quantity'>"
                                .$item['quantity'].   
                            "</div>
                            <div class='quantity'>$".
                                $item['unit_price']*$item['quantity']."
                            </div>
                         </div>";
                    }
                    echo "<div class='quantity'>
                                Total Amount
                                $" . $totalAmount .
                            "</div>";
                }   
            ?>
            <tr>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php' ?>