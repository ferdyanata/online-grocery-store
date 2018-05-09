<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>

<form class="container ui form" id="checkoutForm" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
  
    <h4 class="ui dividing header">Shipping Information</h4>
    <div class="field">
        <label>Name<span class="asterisks">*</span></label>
        <div class="three fields">
            <div class="field">
                <input type="text" name="shipping[first-name]" placeholder="First Name" size="20" maxlength="20">
            </div>
            <div class="field">
                <input type="text" name="shipping[last-name]" placeholder="Last Name">
            </div>
            <div class="field">
                <input type="text" name="shipping[email]" placeholder="Email address">
            </div>
        </div>
    </div>

    <div class="field">
        <label>Billing Address<span class="asterisks">*</span></label>
        <div class="two fields">
            <div class="field">
                <input type="text" name="shipping[address]" placeholder="Street Address">
            </div>
            <div class="field">
                <input type="text" name="shipping[suburb]" placeholder="Suburb">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label>State<span class="asterisks">*</span></label>
                <select class="ui fluid dropdown">
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
                    <input type="text" name="shipping[country]" id="country" placeholder="Country">
                </div>
            </div>
            <div class="field">
                <label for="postcode">Postcode<span class="asterisks">*</span></label>
                <input type="text" name="shipping[postcode]" id="postcode" placeholder="Postcode">
            </div>
        </div>
    </div>

    <div class="field">
        <h4 class="ui dividing header">Receipt</h4>        
        <label for="sendReceiptInput">Send Receipt To:</label>
        <input type="text" id="sendReceiptInput">
    </div>

    <button class="ui blue button" type="submit"><i class="credit card outline icon"></i>Purchase</button>
</form>

<?php
    // @desc 
    // Test code for email

    // $to = "ferdy.anata@gmail.com";
    // $subject = "HTML email";
    
    // $message = "
    // <html>
    // <head>
    // <title>HTML email</title>
    // </head>
    // <body>
    // <p>This email contains HTML Tags!</p>
    // <table>
    // <tr>
    // <th>Firstname</th>
    // <th>Lastname</th>
    // </tr>
    // <tr>
    // <td>John</td>
    // <td>Doe</td>
    // </tr>
    // </table>
    // </body>
    // </html>
    // ";
    
    // // Always set content-type when sending HTML email
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // // More headers
    // $headers .= 'From: <ferdy.anata@gmail.com>' . "\r\n";
    // // $headers .= 'Cc: myboss@example.com' . "\r\n";
    
    // mail($to,$subject,$message,$headers);
?>

<?php include_once 'includes/footer.php' ?>