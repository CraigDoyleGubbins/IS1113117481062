<?php
//start php session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        echo "Total is " . $_SESSION["total"];
        ?>
        
        <p>hellolo1235554</p>
    </body>
</html>