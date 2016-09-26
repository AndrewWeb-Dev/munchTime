$(function(){

//When the hamburger menu is clicked
	$(".fa-bars").on("click", function(){
		if ($(this).hasClass("animated") && $("#menu-primary-menu").hasClass("animated") && $(".fa-times").hasClass("animated") === true) {
			$(this).removeClass("animated slideOutRight slideInRight");
			$("#menu-primary-menu").removeClass("animated slideOutRight slideInRight");
			$(".fa-times").removeClass("animated slideOutRight slideInRight");
		}
		$(this).addClass("animated slideOutRight");
		//slide the menu out from right
		$("#menu-primary-menu").css({"display": "block"}).addClass("animated slideInRight");
		//display close button
		$(".fa-times").css({"display": "block"}).addClass("animated slideInRight");
		//when the close button is clicked
		$(".fa-times").on("click", function() {
			//slide the menu back out to the right
			$("#menu-primary-menu").removeClass("slideInRight").addClass("slideOutRight");
			$(this).removeClass("slideInRight").addClass("slideOutRight");
			//display the ham menu
			$(".fa-bars").removeClass("slideOutRight").addClass("slideInRight");
		});
	});

});