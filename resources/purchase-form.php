<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>

<form class="container ui form" id="checkoutForm" action="mail-form.php" method="POST">
  
    <h4 class="ui dividing header">Shipping Information</h4>
    <div class="field">
        <label>Name<span class="asterisks">*</span></label>
        <div class="three fields">
            <div class="field">
                <input type="text" id="firstName" name="first-name" placeholder="First Name" size="20" maxlength="20">
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
                    <option value="Qld">Qld</option>
                    <option value="SA">SA</option>
                    <option value="Tas">Tas</option>
                    <option value="Vic">Vic</option>
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

    <button class="ui blue button" name="submit" type="submit">Purchase</button>
</form>

<h2>Your items</h2>
<?php
    session_start();
    if(isset($_SESSION["cart_item"])) {
        foreach ($_SESSION["cart_item"] as $item) {
    ?>
        <div id="view-cart-div">
            <tr>
                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["product_name"]; ?></strong></td>
                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["product_id"]; ?></td>
                <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["unit_price"]; ?></td>
            </tr>
        </div>
    <?php
        }
    }    
?>

<?php include_once 'includes/footer.php' ?>