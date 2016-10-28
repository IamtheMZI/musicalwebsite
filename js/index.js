var stream,recorder;
var song_play = function(){
   $(".itm").click(function(){
	$("#aud_src").attr("src", "music/".concat($(this).text()));
	$("#aud_ctl")[0].pause();
	$("#aud_ctl")[0].load();
	$("#aud_ctl")[0].oncanplaythrough = $("#aud_ctl")[0].play();
   });

}
<<<<<<< HEAD
=======

//Live Audio and Video Stuff

//Error and Success Callbacks
/*var onFail = function(e) {
  console.log('Rejected!', e);
};

var onSuccess = function(s) {
  stream = s;
  var ctx = new AudioContext();
  var streamSource = ctx.createMediaStreamSource(s);
  recorder = new Recorder(mediaStreamSource);
  recorder.record()
}



function startRecording() {
  if (navigator.getMedia) {
    navigator.getMedia({audio: true,video:true}, onSuccess, onFail);
  } else {
    console.log('navigator.getUserMedia not present');
  }
}

function audio_stream_and_record() {
$('audio').attr("src",window.URL.createObjectURL(stream));
}

function video_stream_and_record() {
$('video').attr("src",window.URL.createObjectURL(stream));
}

$(document).ready(function() {
    window.URL = window.URL || window.webkitURL;
    navigator.getMedia  = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
    startRecording();
});
*/
>>>>>>> 943bf692988730e75f7195926c5d26396cbce4d4
