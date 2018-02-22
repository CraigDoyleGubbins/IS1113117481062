<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    <body>
        <h4>Select a product</h4>
        
        </br>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            
            <label for="googledrive">
                <input type="radio" id="googledrive" name="product" checked onClick="disablebtnProceed()">
                Google Drive @ $150
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
                Cloud 9 @ $200
            </label>
            
            <br/>
            
            <label for="subtotal">
                Subtotal:
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                Discount:
                <br/>
                <input type="text" id="discount" name="total" value="0.00" class="inline" readonly/>
            </label>
            
            <br/>
            
            <label for="vat">
                VAT:
                <br/>
                <input type="text" id="vat" name="vat" value="0.00" class="inline" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total:
                <input type="text" id="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a rule="button" href="Ebus1.php">Clear Choice</a>
        
        
    </body>
</html>