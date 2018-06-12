$(function(){

	/*MENU ACCORDERON*/
	$("#menu-accordeon h3").click(function(){
		//slide up all the link lists
		$("#menu-accordeon ul .slideUp").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	});
	
	/*SELECTION PERIODE*/
	
	var currentThumb = 0,
	    periodeOption = $('.periodeOption');
	    
	function periode() {
		currentThumb = currentThumb+1;
		$('.periode.active').removeClass('active');
		$('.periode'+ currentThumb).addClass('active');

		$('.periodeOption.active').removeClass('active');
		$('#periodeOption'+ currentThumb).addClass('active');

		$('.tableau.active').removeClass('active');
		$('#tableau'+ currentThumb).addClass('active');
	}

	periodeOption.click(function(){
		currentThumb = periodeOption.index(this);
		periode();
	});

	/*SELECTION popup*/

	$('.displayBtn').on('click', function(){
 
 		var popup_element = $('.popupTableau');

    	popup_element = $(this).parent().next();
    	popup_element.toggleClass('active');

 	});

	/*SELECTION COCHE*/

	$('.coche').on('click', function(){
 
 		var td_element = $('.displayCoche');

    	td_element = $(this).parent();
    	td_element.toggleClass('active');

	 });
	
	/*BURGER*/
	
	$('#iconBurger').click(function(){
		$('#sidebar').toggleClass('isOpen');
	});
	

});




