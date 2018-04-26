<?php include_once 'resources/config.php' ?>
<?php include_once 'resources/includes/header.php' ?>


<form id="checkoutForm" action="<?php $_SERVER['PHP_SELF']?>" method="GET">
<table>
    <h4>Shipping Information</h4>
    <tr>
        <td><label for="first-name">First Name</label></td>
        <td><input type="text" id="first-name" placeholder="First Name"></td>
    </tr>
    <tr>
        <td><label for="last-name">Last Name</label></td>
        <td><input type="text" id="last-name" placeholder="Last Name"></td>
    </tr>
    <tr>
        <td><label for="address">Address</label></td>
        <td><input type="text" id="address" placeholder="Address"></td>
    </tr>
    <tr>
        <td><label for="suburb">Suburb</label></td>
        <td><input type="text" id="suburb" placeholder="Suburb"></td>
    </tr>
    <tr>
        <td><label for="state">State</label></td>
        <td><input type="text" id="state" placeholder="State"></td>
    </tr>
    <tr>
        <td><label for="country">Country</label></td>
        <td><input type="text" id="country" placeholder="Country"></td>
    </tr>
    <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" id="email" placeholder="Email"></td>
    </tr>
    <tr>
        <td><label for="purchase"></label></td>
        <td><input type="submit" value="Purchase"></td>
    </tr>
</table>
</form>

<?php
    
    $to = "ferdy.anata@gmail.com";
    $subject = "HTML email";
    
    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <ferdy.anata@gmail.com>' . "\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";
    
    mail($to,$subject,$message,$headers);
?>

<?php include_once 'resources/includes/footer.php' ?>