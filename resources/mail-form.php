<!-- 
    @desc   
    Emails the user the products that they've purchased  
-->

<?php include_once 'includes/header.php' ?>

<?php 
    
    session_start();
    // Retains the cart items and displays it in the email
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

    if(isset($_POST["submit"])) {
        $mailTo = $_POST["email"]; 
        $subject = "Your shopping order has been placed!"; 
        $firstName = $_POST["first-name"]; 
        $lastName = $_POST["last-name"]; 
        $address = $_POST["address"]; 
        $postcode = $_POST["postcode"]; 
        $state = $_POST["state"]; 
        $suburb = $_POST["suburb"]; 
        $country = $_POST["country"];
    
        
        $message = " 
        <html> 
    
        <head> 
            <title>Online Grocery Store</title> 
        </head> 
        
        <body> 
            <p>Hey {$firstName},</p> 
            <p>Good news, your order has been placed with us. You can check your order below</p> 
            <p>Have a great day,</p> 
            <p>The Online Grocery Store</p> 
            <table>
                <tr>
                    <thead> 
                        Shipping Address 
                    </thead> 
                </tr>
                <tr> 
                    <td>{$firstName}</td> 
                    <td>{$lastName}</td> 
                </tr> 
                <tr> 
                    <td>{$address}</td>
                </tr> 
                <tr>
                <td>
                    {$suburb},
                </td>
                <td>
                    {$postcode} {$state},
                </td>
                <td>
                    {$country}
                </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <thead>
                    Item details
                </thead>
            </tr>
        </table>
    </body>
    
    </html>
        "; 
        
        // Always set content-type when sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        
        // More headers 
        $headers .= 'From: <no-reply@onlinegrocerystore.com>' . "\r\n"; 
        // $headers .= 'Cc: myboss@example.com' . "\r\n"; 
        
        mail($mailTo,$subject,$message,$headers); 
    }
    
?> 

<?php include_once 'includes/footer.php' ?>