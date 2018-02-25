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
        validateEmail(email, invalidError);
        validatePin(user_pin, invalidError);
        if (invalidError != "No error"){
            alert(invalidError);
        }
        else{
            // continue...........
            alert("continue")
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

/* function found on https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript */
function validateEmail(email, invalidError) {
    var testAgainst = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (testAgainst.test(String(email).toLowerCase()) == false){
        return invalidError = "Invalid email address";
    }
    else{
        return invalidError = "No error";
    }
}

function validatePin(user_pin, invalidError){
    if ((String(user_pin).length < 4) || (String(user_pin).length == 4 && user_pin != "1234")){
        if (invalidError == "No error"){
            return invalidError = "Invalid pin (must be 4 characters long)";
        }
        else {
            return invalidError =  "Invalid email and pin (must be 4 characters long)";
        }
    }
    else{
        return invalidError = "No error";
    }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}