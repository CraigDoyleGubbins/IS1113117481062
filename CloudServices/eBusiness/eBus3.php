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
        
        <div class="shopcard receipt" style="text-align: center">
            <p>
                Thank you, <?php echo $_SESSION["user_name"] ?>.
                <br>
                Total: &euro;<?php echo $_SESSION["total"] ?>
                <?php echo "hello" ?>
            </p>
            
            <div class="breakdown">
                
                <div style="float:left; width: 40%;line-height:22px">
                    <label for="subtotal">
                        Subtotal:
                    </label>
                    <br>
                    <label for="discount">
                        Discount @ 5%:
                    </label>
                    <br>
                    <label for="vat">
                        VAT:
                    </label>
                    <br>
                    <label for="total">
                        Total:
                    </label>
                </div>
                        
                <div style="float:right; width: 15%; margin-right: 20%">
                    <input type="text" id="subtotal" value="0.00sdfghjhgfcghj" name="subtotal" style="width:100%" readonly/>
                    <br>
                    <input type="text" id="discount" value="0.00" name="discount" style="width:100%" readonly/>
                    <br>
                    <input type="text" id="vat" value="0.00" name="vat" style="width:100%" readonly/>
                    <br>
                    <input type="text" id="total" value="0.00" name="total" style="width:100%" readonly/>
                </div>
                
            </div>
            
            <?php
                echo (substr_replace($_SESSION["email"] - strchr($_SESSION["email"], "@"), "********", 1));
            ?>
            
            
            <p>An email will be sent to <?php echo substr_replace() ?></p>
            
        </div>
        
        
        
        
        <?php
        //session variables
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["email"] = $_POST["email"];
        ?>
    </body>
</html>