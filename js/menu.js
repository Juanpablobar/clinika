$(document).ready(function() {

    $('#toggle-button').click(function() {

		$('#toggle-button').toggleClass('toggle-button');
        
		$('#toggle-button').toggleClass('toggle-button2');
		
        $('.nav2').toggleClass('nav4');
        
	 });
    $('#toggle-button').click(function() {
        
        $('.nav3').slideToggle('slow');
	 });

	$('.nav3-button').click(function() {

	 	$('.nav3-content').slideUp('slow');
        
		if($(this).next().is(':hidden') == true) {

			$(this).next().slideDown('slow');
		 }

	 });
    $('#nav3-button1').click(function() {
        
        $('#up1').toggleClass('up');
        
		$('#up1').toggleClass('up2');
        
        $('#up2').addClass('up');
        
		$('#up2').removeClass('up2');
        
        $('#up3').addClass('up');
        
		$('#up3').removeClass('up2');
	 });
    $('#nav3-button2').click(function() {
        
        $('#up2').toggleClass('up2');
        
		$('#up2').toggleClass('up');
        
        $('#up1').addClass('up');
        
		$('#up1').removeClass('up2');
        
        $('#up3').addClass('up');
        
		$('#up3').removeClass('up2');
	 });
    $('#nav3-button3').click(function() {
        
        $('#up3').toggleClass('up2');
        
		$('#up3').toggleClass('up');
        
        $('#up2').addClass('up');
        
		$('#up2').removeClass('up2');
        
        $('#up1').addClass('up');
        
		$('#up1').removeClass('up2');
	 });
       
        $('.nav3-content').hide();
        $('.nav3').hide();
           
});