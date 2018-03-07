<?php
//start php session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <meta charset= "utf-8"/>
        
        <link rel="stylesheet" href="../shop_style.css" type="text/css"/>
        
    </head>
    <body>
        
        <div class="header">
          <h1 style="color: white">
              <b>BIS Cloud Services</b>
          </h1>
        </div>
        
        <h3>Order Confirmed</h3>
        
        <div class="shopcard" style="text-align: center">
            <p>
                Thank you, <?php echo $_POST["user_name"] ?>.
                <br>
                Your total is: &euro;<?php echo $_SESSION["total"] ?>.
            </p>
            
            <div class="breakdown">
                
                <div style="float:left; width: 55%">
                    <p>
                        Subtotal:
                    </p>
                    <p>
                        Discount @ 5%:
                    </p>
                    <p>
                        VAT:
                    </p>
                    <p>
                        Total:
                    </p>
                </div>
                        
                <div style="float:right; width: 15%; margin-right: 20%">
                    <p>
                        &euro;<?php echo $_SESSION["subtotal"] ?>
                    </p>
                    <p>
                        &euro;<?php echo $_SESSION["discount"] ?>
                    </p>
                    <p>
                        &euro;<?php echo $_SESSION["vat"] ?>
                    </p>
                    <p>
                        &euro;<?php echo $_SESSION["total"] ?>
                    </p>
                </div>
                
            </div>
            
            <p>An email has been sent to <?php echo $_SESSION["email"] ?></p>
            
            <a class="button returnshop" href="../VendorHomepage.html">Home</a>
            <a class="button leaveshop" href="../../homepage.html">Leave</a>
            
            
        </div>
        
        <?php
        //session variables
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["email"] = $_POST["email"];
        ?>
        
    </body>
</html>