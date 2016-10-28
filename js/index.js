var stream,recorder;
var song_play = function(){
   $(".itm").click(function(){
	$("#aud_src").attr("src", "music/".concat($(this).text()));
	$("#aud_ctl")[0].pause();
	$("#aud_ctl")[0].load();
	$("#aud_ctl")[0].oncanplaythrough = $("#aud_ctl")[0].play();
   });

}
