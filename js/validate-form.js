/**
 * Reference: Validation below was used from Lecture 5 (JavaScript) PowerPoint slide.
 */

function validateForm() {
    // Check for any fields that are blank
    if(hasBlanks()){
        swal("Looks like you missed something!", 
                       "One or more fields appear to be blank", "warning");
        
        return false;
    }
   
    // // Check if postcode is valid. Numbers from 1 - 9 and only allow 4 digits  
    var postcode_data = document.getElementById("postcode");

    if(isValidRange(postcode_data.value,"0123456789")){
        return true;
    }else{
        swal("Oops!", "One or more fields are incorrect!", "warning");
        return false;   
    }
}

function hasBlanks() {
    // The values in the array fetches the ids in purchase-form
    var compulsory_fields = new Array("firstName", "lastName", "email", "address",
                                        "suburb", "state", "country", "postcode");
    for (var i = 0; i < compulsory_fields.length; i++) {
        var formField = document.getElementById(compulsory_fields[i]);
        if (formField.value == "") {
            return true;
        }
    }
    return false;
}

function isPostcodeValid(){
    var postcodeField = document.getElementById("postcode").value;    
    var postcodeRE = /\d{4}/;
    var match = postcodeRE.match(postcodeField);
    alert("postcode regex works");
    // if(!match){
    //     return true;
    // }
}

function isValidRange(strCheck, validChars) {
    var strlen = strCheck.length;
    var intlen = validChars.length;
    var currChar;
    var currcheck;
    var thischarOK;
    for (var i = 0; i < strlen; i++) {
        currChar = strCheck.charAt(i);
        thischarOK = false;
        for (j = 0; j < intlen; j++) {
            currcheck = validChars.charAt(j);
            if (currcheck === currChar) {
                thischarOK = true;
                break;
            }
        }
        if (thischarOK === false) {
            return false;
        }
    }
}