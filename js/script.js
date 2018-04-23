/* 
    Created on : 23/04/2018, 12:52:07 AM
    Author     : Ferdy
*/
/**
 * @description: Functions to display/hide products depending on the state
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