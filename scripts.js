// Toggle the nav to scroll in/out when the Menu is clicked on mobile
$("#toggle").on("click", function(){
	$("nav.main-menu").slideToggle();
	console.log("click");
});

// Prevent disappearing nav on desktop
$(window).on("resize", function(){

	if ($(window).width() > 600){
		$("nav.main-menu").show();
	} else {
		$("nav.main-menu").hide();
	}
});





// Possible Mobile Nav fix

/*
	Flaunt.js v1.0.0
	by Todd Motto: http://www.toddmotto.com
	Latest version: https://github.com/toddmotto/flaunt-js
	Copyright 2013 Todd Motto
	Licensed under the MIT license
	http://www.opensource.org/licenses/mit-license.php
	Flaunt JS, stylish responsive navigations with nested click to reveal.
*/
// ;(function(e)
// 	{e(function()
// 		{
// 			e(".primary-mobile-nav").append(e('<div class="nav-mobile"></div>'));
// 			e(".menu-item").has("ul").prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
// 			e(".nav-mobile").click(function()
// 				{
// 					e(".menu").toggle()});e(".menu").on("click",".nav-click",function(){
// 						e(this).siblings(".sub-menu").toggle();
// 						e(this).children(".nav-arrow").toggleClass("nav-rotate")
// 					})
// 				})
// })(jQuery);
