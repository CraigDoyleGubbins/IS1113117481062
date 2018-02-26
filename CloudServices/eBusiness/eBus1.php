<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <script type="text/javascript" src="cost_calc.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    
    <body>
        <h4>Select a product</h4>
        
        </br>
        
        <form action="eBus2.php" method="POST">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            <br/>
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br/>
            <label for="aws">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()">
                Amazon Web Services @ $300
            </label>
            <br/>
            <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()">
                Gmail @ $400
            </label>
            <br/>
            
            <br/>
            <label for="subtotal">
                Subtotal:
                <input type="text" id="subtotal" value="0.00" name="subtotal" readonly/>
            </label>
            <br/>
            <label for="discount">
                Discount @ 5%:
                <input type="text" id="discount" value="0.00" name="discount" readonly/>
            </label>
            <br/>
            <label for="vat">
                VAT:
                <input type="text" id="vat" value="0.00" name="vat" readonly/>
            </label>
            <br/>
            <label for="total">
                Total:
                <input type="text" id="total" value="0.00" name="total" readonly/>
            </label>
            <br/>
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Cost</button>
        <a rule="button" href="eBus1.php">Clear Choice</a>
    </body>
</html>