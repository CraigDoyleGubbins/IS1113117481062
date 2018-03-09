<!DOCTYPE html>
<html>
    <head>
        <title>BIS Store</title>
        
        <link rel="icon" href="../code.ico" type="image/x-icon">
        
        <link rel="stylesheet" href="../shop_style.css" type="text/css"/>
        
        <meta charset= "utf-8"/>
        
        <script src="cost_calc.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body style="margin-left: 25%; margin-right: 25%">
        
        <div class="header">
          <h1 style="color: white">
              <b>BIS Cloud Services</b>
          </h1>
        </div>
        
        <form action="eBus2.php" method="POST" style="max-width:360px">
            
            <h3>Select a product below:</h3>
            
            
            <div class="shopcard columns options">
                        
                <div class="column1" style="line-height:20px; width: 90%">
                    <label for="salesforce">
                        Salesforce @ $100
                    </label>
                    <br>
                    <label for="cloud9">
                        Cloud 9 @ $200
                    </label>
                    <br>
                    <label for="aws">
                        Amazon Web Services @ $300
                    </label>
                    <br>
                    <label for="total">
                        Gmail @ $400
                    </label>
                </div>
                        
                <div class="column2" style="width:10%">
                    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    <br>
                    <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                    <br>
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    <br>
                    <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                </div>
                
            </div>
            
            
            <h3>Totals:</h3>
            
            <div style="content: ''; display:table; clear:both; margin:auto;">
            
                <div style="float:left; width:70%;">
                    <div class="shopcard columns">
                        
                        <div class="column1" style="line-height:22px">
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
                        
                        <div class="column2">
                            <input type="text" id="subtotal" value="0.00" name="subtotal" style="width:100%" readonly/>
                            <br>
                            <input type="text" id="discount" value="0.00" name="discount" style="width:100%" readonly/>
                            <br>
                            <input type="text" id="vat" value="0.00" name="vat" style="width:100%" readonly/>
                            <br>
                            <input type="text" id="total" value="0.00" name="total" style="width:100%" readonly/>
                        </div>
                    </div>
                </div>
                
                <div style="float:right; width:30%; padding-top: 10%">
                    <a onClick="calcSub()" class="button calculate" style="cursor:pointer;">Calculate</a>
                    <br>
                    <br>
                    <br>
                    <a href="eBus1.php" class="button cancel">Clear</a>
                </div>
            </div>
            
            <button type="submit" id="btnProceed" class="button add" style="margin-left: 25%; margin-right: 25%;" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        
        
    </body>
</html>