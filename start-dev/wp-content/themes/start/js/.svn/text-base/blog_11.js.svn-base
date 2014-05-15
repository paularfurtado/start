var $j = jQuery.noConflict();
$j(document).ready(function(){
	
	//PLAYER BLOG
	$j("#jquery_jplayer_1").jPlayer({
		ready: function () {	
			$j(this).jPlayer("setMedia", {
				mp3: "audio/blog_11.mp3",	
			}).jPlayer("stop");	
		},	
		ended: function (event) {
			$j(this).jPlayer("stop");
		},
		swfPath: "../../../js",
		supplied: "mp3"	
	})
	.bind($j.jPlayer.event.play, function() {
		$j(this).jPlayer("pauseOthers");
	});	
	
});
