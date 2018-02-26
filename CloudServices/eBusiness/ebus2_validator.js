/* global $ */
    
function validateDetails(){
    
    var user_name = document.getElementById("user_name").value;
    var email = document.getElementById("email").value;
    var user_pin = document.getElementById("user_pin").value;
    
    var allFull;

    allFull = checkEmpty(user_name, email, user_pin, allFull);
    
    if (allFull == false){
        alert("Please fill in all details");
    }
    else{
        
        var invalidError;
        
        /* https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript */
        var testEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (testEmail.test(String(email).toLowerCase()) == false){
            invalidError = "Invalid email address";
        }
        else{
            invalidError = "No error";
        }
        
        if (user_pin != "1234"){
            if (invalidError == "No error"){
                invalidError = "Invalid pin (must be 4 characters long)";
            }
            else {
                invalidError =  "Invalid email and pin (must be 4 characters long)";
            }
        }
        else{
            invalidError = "No error";
        }
        
        if (user_pin == "1234" && testEmail.test(String(email).toLowerCase()) == false){
            invalidError = "Invalid email address";
        }
        
        if (invalidError != "No error"){
            alert(invalidError);
            disablebtnPurchase();
        }
        else{
            // continue...........
            enablebtnPurchase();
        }
    }
}

function checkEmpty(user_name, email, user_pin, testFull){
    
    testFull = true;
    
    testFull = (user_name != "");
    if (testFull == true){
        testFull = (email != "");
        if (testFull == true){
            testFull = (user_pin != "");
            }
        }
        
    return testFull;
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}