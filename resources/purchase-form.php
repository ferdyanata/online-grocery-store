<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>

<form class="container ui form" id="checkoutForm" action="<?php $_SERVER['PHP_SELF']?>" method="POST"
        onsubmit="return validate_form()">
  
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

    <div class="field">
        <h4 class="ui dividing header">Receipt</h4>        
        <label for="sendReceiptInput">Send Receipt To:</label>
        <input type="text" id="sendReceiptInput">
    </div>

    <button class="ui blue button" type="submit">Purchase</button>
</form>

<?php
    // @desc 
    // Emails the user the products that they've purchased

    $to = $_GET["email"];
    $subject = "Your shopping order has been placed!";
    $firstName = $_GET["first-name"];
    $lastName = $_GET["last-name"];
    $address = $_GET["address"];
    $postcode = $_GET["postcode"];
    $state = $_GET["state"];
    $suburb = $_GET["suburb"];
    $country = $_GET["country"];

    
    $message = "
    <html>

    <head>
        <title>HTML email</title>
    </head>
    
    <body>
        <p>Hey {$firstName},</p>
        <p>Good news, your order has been placed with us.</p>
        <p>You can check your order below</p>
        <p>Have a great day,</p>
        <p>The Online Grocery Store</p>
        <table>
            <thead>
                Shipping Address
            </thead>
            <tr>
                <td>{$firstName}</td>
                <td>{$lastName}</td>
            </tr>
            <tr>
                <td>{$address}</td>
                <td>{$suburb}, {$postcode}</td>
                <td>{$state}, {$country}</td>
            </tr>
        </table>
    
        <table>
            <tr>
                <thead>
                    Item details
                </thead>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </body>
    
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <{$to}>' . "\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";
    
    mail($to,$subject,$message,$headers);
?>

<?php include_once 'includes/footer.php' ?>