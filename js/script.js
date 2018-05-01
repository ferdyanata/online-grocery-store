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
 * 3. In stock
 * @param {*} productId 
 * Retrieve product id from value attribute
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
            var ajaxDisplay = parent.frames["index-get-products"].document.getElementById("product-details");
            ajaxDisplay.innerHTML = xhttp.responseText;
        } 
    } 

    xhttp.open("GET", "product-details.php?productId=" + productId, true); 
    xhttp.send();
}