<?php
//start php session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment Details</title>
        
        <link rel="stylesheet" href="../shop_style.css" type="text/css"/>
        
        <meta charset= "utf-8"/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        
        <div class="header">
          <h1 style="color: white">
              <b>BIS Cloud Services</b>
          </h1>
        </div>
        
        <form action="eBus3.php" method="POST">
            
            <h3>Please enter your payment details:</h3>
            
            <div class="shopcard" style="content:; display:table; clear:both; width:60%; line-height:28px; margin-right: 15%; margin-left:15%;">
                
                <div style="float:left; width:40%">
                    <label for="user_name">Name:</label>
                    <br/>
                    <label for="email">Email Address:</label>
                    <br/>
                    <label for="user_pin">PIN:</label>
                </div>
                
                <div style="float:right; width: 60%">
                    <input type="text" id="user_name" placeholder="as appears on card">
                    <br>
                    <input type="text" id="email" placeholder="someone@example.com">
                    <br>
                    <input type="password" id="user_pin" placeholder="1234" maxlength="4">
                    <br>
                </div>
                
            </div>
            <br>
            
            <a class="button calculate" onClick="validateDetails()" style="margin-left:42% ;margin-right:42%;">Validate</a>
            <br>
            <br>
            <button type="submit" class="button add" id="btnPurchase" style="margin-left:35% ;margin-right:35%;" disabled>Proceed with Purchase</button>
            
            <br>
            
        </form>
        
        <?php
        //session variables
        $_SESSION["subtotal"] = $_POST["subtotal"];
        $_SESSION["discount"] = $_POST["discount"];
        $_SESSION["vat"] = $_POST["vat"];
        $_SESSION["total"] = $_POST["total"];
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["email"] = $_POST["email"];
        ?>
    </body>
</html>