/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */


 var feed = new Instafeed({
	get: 'user',
	userId: '4792937054',
	accessToken: '4792937054.a746536.49072ffa977f4bf3bf2882f36fe558a5',
	limit: 60,
	sortBy: 'most-liked',
	template: '<div class="col-6 col-lg-4 col-xl-3 col-md-4 col-sm-6 instafeed-img"><a href="{{link}}" target="_blank"><img src="{{image}}" class="img-responsive" /></a></div>',
	resolution: 'low_resolution',
	
      after: function () {
        var images = $("#instafeed").children();
        $(images.slice(12, images.length)).remove();
    }
});
	feed.run();


// $(".shop-search-nav").click(function(){

// 	// $("#search_widget").slideDown();
// 	$("#search_widget").fadeIn();
// 	$("#search_widget").show();
// })

// // $(document).on('click', function (e) {
// //     if ($(e.target).closest("#search_widget").length === 0) {
// //         $("#search_widget").hide();
// //     }
// // });

$(".shop-search-nav").click(function(e){
	$("#search_widget").fadeIn(100);
	$("#overlay-search").show();
	$("#close-search").show();
	$("BODY").css('overflow','hidden')
    // $("#search_widget").show();
     e.stopPropagation();
});

$("#search_widget").click(function(e){
    e.stopPropagation();
});

$(document).click(function(){
    $("#search_widget").fadeOut(100);
    $("#overlay-search").hide();
    $("BODY").css('overflow','visible')
});

$("#close-search").click(function(e){
	$("#search_widget").fadeOut(100);
	$("#overlay-search").hide();
})