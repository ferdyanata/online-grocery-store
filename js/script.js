/* 
    Created on : 23/04/2018, 12:52:07 AM
    Author     : Ferdy
*/
/**
 * @desc
 * Functions to display/hide products depending on the state
 */
$(document).ready(function() {
    $('.sub').hide();
    $('.subSub').hide();

    $('#menu li').hover(
        // slideToggle(350) refers to animation speed.
        function() {
            $(this).children('.sub').stop().slideToggle(350);
        },
    
        function() {
            $(this).children('.sub').stop().delay(100).slideToggle(350);
        }
    );
    
    $('.sub li').hover(
        function() {
            $(this).children('.subSub').stop().slideToggle(150);
        },
        
        function() {
            $(this).children('.subSub').stop().delay(100).slideToggle(150);
        }
    );
});

/**
 * @desc
 * Displays details of product when user clicks a button including
 * 1. Product name
 * 2. Price
 * 3. Enter quantity amount to add to cart
 * @param {*} productId 
 * Retrieves product id from value attribute
 */
function displayDetails(productId)
{
    var xhttp; 
    if (window.XMLHttpRequest) { 
        xhttp = new XMLHttpRequest(); 
    } else { 
        xhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 

    xhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) {
            // Get parent of index-get-products, which is view-products page
            // Get query from product-details
            // Source: https://stackoverflow.com/questions/1807711/javascript-document-getelementbyid-in-other-frames
            // Display the product name, uni quantity and unit price where product-details id is (get-products.php)
            var ajaxDisplay = parent.frames["frame-get-products"].document.getElementById("query-product-details"); 
            ajaxDisplay.innerHTML = xhttp.responseText; 
        } 
    }

    xhttp.open("GET", "query-product-details.php?productId=" + productId, true); 
    xhttp.send();
}

function validateQuantity(in_stock)
{
    var quantity = parseInt(document.getElementById("quantity_box").value);

    if (Number.isInteger(quantity)) {
        if (quantity < 0 || quantity == 0) {
            swal("Uh Oh!", "Quantity should not be less than 1!", "warning");
            return false;
        }
        if (quantity > 20) {
            swal("Uh Oh!", "Quantity should not be more than 20!", "warning");
            return false;
        }
        else {
            return true;
        }
    } else {
        swal("Uh Oh!", "Please input an integer!", "warning");
        return false;
    }
}

function displayWarning()
{
    swal("Oops! Your cart is empty", "Please add items to your cart to continue", "warning");
}