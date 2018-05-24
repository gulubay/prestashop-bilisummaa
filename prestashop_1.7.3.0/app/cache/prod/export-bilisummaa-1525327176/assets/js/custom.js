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