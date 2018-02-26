/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked){
        argSubTotal = 100;
        calcDisVatTotal(argSubTotal);
    }
    if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
        calcDisVatTotal(argSubTotal);
    }
    if(document.getElementById('aws').checked){
        argSubTotal = 300;
        calcDisVatTotal(argSubTotal);
    }
    if(document.getElementById('gmail').checked){
        argSubTotal = 400;
        calcDisVatTotal(argSubTotal);
    }
}

function calcDisVatTotal(argSubTotal){
    
    var num1, discountAmt, vatAmt, totalPrice;
    
    discountAmt = argSubTotal * 0.05;
    document.getElementById("discount").value = discountAmt;
    
    num1 = argSubTotal - discountAmt;
    vatAmt = num1 * .1;
    
    totalPrice =argSubTotal-discountAmt+vatAmt;
    
    display(argSubTotal, discountAmt, vatAmt, totalPrice);
}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;

    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}