$(function() {

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#about a:contains('About Tradecast')").parent().addClass('active');
	$("#browse a:contains('Browse Forecasts')").parent().addClass('active');
	$("#propose a:contains('Propose a Question')").parent().addClass('active');
	$("#learn a:contains('Learn to Trade')").parent().addClass('active');
	$("#started a:contains('Get Started')").parent().addClass('active');


	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover

}); //jQuery is loaded