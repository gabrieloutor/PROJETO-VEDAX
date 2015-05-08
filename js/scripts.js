jQuery.noConflict();
var asjQuery = jQuery.noConflict();
asjQuery(document).ready(function() 
{
	
	//************************************
	// Hide #back-top first
	//************************************
	asjQuery("#back-top").hide();
		
		
	//************************************
	// Fade in #back-top
	//************************************		
	asjQuery(function () 
	{
		asjQuery(window).scroll(function () 
		{
			if (jQuery(this).scrollTop() > 100) 
			{
				asjQuery('#back-top').fadeIn();
			} 
			else 
			{
				asjQuery('#back-top').fadeOut();
			}
		});
	
		//************************************
		// Scroll body to 0px on click
		//************************************	
		asjQuery('#back-top a').click(function () 
		{
			asjQuery('body,html').animate(
			{
				scrollTop: 0
			}, 400);
			return false;
		});
	});	
});