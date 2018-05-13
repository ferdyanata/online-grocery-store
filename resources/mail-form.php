<!--
* @author Ferdy Anata, Zhengjie Huang
* Created on: 12/05/2018
* Description: Triggers PHP's mailing function and displays the 
* NOTE: To view all the details, email must be opened in the browser as it does not work
* in some email management applications.
* 
* Reference: http://php.net/manual/en/function.mail.php
-->

<?php include_once 'includes/header.php' ?>

<?php 
    session_start();
    // Displays a confirmation message that the order was successful.
    echo "<div style='margin-left: 40%; margin-top: 15%;'>
    <h2>
        Thank You!
    </h2>

    <div class='ui success message' style='width: 35%'>
            <div class='header'>
            Your purchase was successful.
            </div>
            <p>Please check your email for details about your order. Click <a href='../index.php'>here</a> to return shopping.</p>
    </div>
    </div>";
    
    // Retrieve values via name attribute
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
        $message = '';
        
        // Use '$message .=' to chain multiple HTML.
        $message .= " 
            <html>
            <head>
                <title>Online Grocery Store</title>
            </head>

            <body>
            <div class='container'>
                <p>Hey {$firstName},</p>
                <p>Good news, your order has been placed with us. You can check your order below.</p>
                <p>Thanks for shopping with us,</p>
                <p>The Online Grocery Store</p>
                <table>
                    <tbody>
                        <tr>
                            <td style='font-weight: bold'>
                                Shipping Address
                            </td>
                        </tr>
                        <tr>
                            <td>{$firstName} {$lastName}</td>
                        </tr>
                        <tr>
                            <td>{$address}</td>
                        </tr>
                        <tr>
                            <td>
                                {$suburb}, {$postcode} {$state}, {$country}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class='container'>
                <hr style='color: rgb(209, 210, 211)'>
                <table>
                    <tbody>
                        <tr>
                            <td style='font-weight:bold;padding:5px 10px 5px 10px!important;color:#333333;'>
                                Description
                            </td>
                            <td style='font-weight:bold;padding:5px 10px 5px 10px!important;color:#333333;'>
                                Unit Price
                            </td>
                            <td style='font-weight:bold;padding:5px 10px 5px 10px!important;color:#333333;'>
                                Qty
                            </td>
                            <td style='font-weight:bold;padding:5px 10px 5px 10px!important;color:#333333;'>
                                Amount
                            </td>
                        </tr>";

        $totalAmount = 0;

        if(isset($_SESSION["cart_item"])){
            foreach ($_SESSION["cart_item"] as $item) {
                $message .= "<tr>
                                <td style='padding: 10px;'>{$item['product_name']}</td>
                                <td style='padding: 10px;'>{$item['quantity']}</td>
                                <td style='padding: 10px;'>{$item['unit_quantity']}</td>
                                <td style='font-weight: bold; padding: 10px;'>
                                $" . $item['unit_price']*$item['quantity'] .
                                "</td>
                            </tr>";        
                $totalAmount += $item['unit_price']*$item['quantity'];
            }
        }
        
        $message .= "
                    <tr>
                        <td style='margin-right: 100%; padding: 10px;'>
                            Total Amount
                        </td>
                        <td style='font-weight: bold;'>
                            $" . $totalAmount . "
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </body>
            </html>";

        // Always set content-type when sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        
        // More headers
        $headers .= 'From: <no-reply@onlinegrocerystore.com>' . "\r\n"; 
        
        mail($mailTo,$subject,$message,$headers); 
    }

?> 

<?php include_once 'includes/footer.php' ?>