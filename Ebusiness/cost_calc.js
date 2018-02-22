/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked){
        argSubTotal = 100;
    }
    if(document.getElementById('aws').checked){
        argSubTotal = 300;
    }
    if(document.getElementById('googledrive').checked){
        argSubTotal = 150;
    }
    if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
    }
    
    calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(argSubTotal){
  var num1, discount, vat, totalPrice;
  discount = argSubTotal * 0.1;
  document.getElementById("discount").value = discount;
  num1 = argSubTotal - discount;
  vat = num1 * .2;
  totalPrice = argSubTotal-(discount + vat);
  display(argSubTotal,discount,vat,totalPrice);
}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('btnProceed').prop('disabled', true);
}