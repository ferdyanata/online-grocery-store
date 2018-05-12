/**
 * Reference: Validation below was used from Lecture 5 (JavaScript) PowerPoint slide.
 */

function validate_form(){
    // Check for any fields that are blank
    hasBlanks() ? swal("Looks like you missed something!", 
                       "One or more fields appear to be blank", "warning") : false;

    // // Check if postcode
    var postcode_data = document.getElementById("postcode");

    if(isValidRange(postcode_data.value,"0123456789")){
        return true;
    }else{
        swal("Oops!", "One or more fields are incorrect!", "warning");
        return false;   
    }
}

function hasBlanks(){
    // The values in the array fetches the ids in purchase-form
    var compulsory_fields = new Array("firstName", "lastName", "email");

    for(var i = 0; i < compulsory_fields.length; i++){
        var form_field = document.getElementById(compulsory_fields[i]);
        // if true then return alert("One or more fields is blank");
        if (form_field.value = "") { return true; }
    }
    // If condition detects no blank field value, the function returns a value of false;
    return false;
}

function isValidRange(strCheck, validChars){
    var strlen = strCheck.length;
    var intlen = validChars.length;
    var currChar;
    var currcheck;
    var thischarOK;
    for(var i = 0; i < strlen; i++){
        currChar = strCheck.charAt(i);
        thischarOK = false;
        for(j = 0; j < intlen; j++){
            currcheck = validChars.charAt(j);
            if(currcheck === currChar){
                thischarOK = true;
                break;
            }
        }
        if(thischarOK === false){
            return false;
        }
    }
}