$(document).ready(function(){
    $('.header_burger').click(function(event){
         $('.header_burger,.header_menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});



$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});
 
});