<script>
function displayDetails(productId)
{
    var xhttp; 
    if (window.XMLHttpRequest) { 
        xhttp = new XMLHttpRequest(); 
    } else { 
        xhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 

    xhttp.onreadystatechange = function() { 
        if (this.readyState == 4) { 
            var ajaxDisplay = parent.frames["index-get-products"].document.getElementById("product-details");
            ajaxDisplay.innerHTML = xhttp.responseText; 
        } 
    } 

    xhttp.open("GET", "product-details.php?productId="+productId, true); 
    xhttp.send(); 
}
</script>
<script type="text/javascript" src="library/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>