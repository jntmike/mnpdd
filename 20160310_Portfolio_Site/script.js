/**
 * 
 */

$(document).ready(function(){
	
	$(".menu-trigger").click(function(){

		$("#navigation ul").slideToggle(400, function() {

			//$(this).toggleClass("#nav-expand").css('display','');

		});
	});
});

$(function(){
    $('.slider img:gt(0)').hide();
    setInterval(function(){
      $('.slider :first-child').hide()
         .next('img').fadeIn(1000)
         .end().appendTo('.slider');}, 
      4000);
});