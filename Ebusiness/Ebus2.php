<?php
//start php session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        <h4>Please enter your payment details:</h4>
        
            <form action="Ebus3.php" method="POST">
                
                <label for="user_name">Name:</label>
                <input type="text" id="user_name" placeholder="as appears on card">
                <br/>
                <label for="email">Email Address:</label>
                <input type="text" id="email" placeholder="someone@example.com">
                <br/>
                <label for="user_pin">PIN:</label>
                <input type="password" id="user_pin" placeholder="1234" maxlength="4">
                <br/>
                <button type="Submit" id="btnPurchase" disabled> Proceed with Purchase </button>
                
            </form>
            <br />
            <button onClick="validateDetails()">Validate</button>
        
        <?php
        //session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
    </body>
</html>