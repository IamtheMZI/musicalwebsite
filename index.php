<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<script src="js/index.js"></script>
</head>

<body>

<audio controls="controls">
    <source src="https://docs.google.com/uc?export=download&id=0B3xWpddWjpmhYzZISkt4ZUtCVjg"/>
</audio>

<audio controls="controls">
    <source src="https://drive.google.com/open?id=0B3xWpddWjpmhYzZISkt4ZUtCVjg"/>
</audio>

<input onclick="audio_stream_and_record()" type="button" value="Audio Stream" />
<input onclick="video_stream_and_record()" type="button" value="Video Stream" />

<div id = "aud_plr">
  <div id = "aud_plr_inr">
    <audio controls id="aud_ctl">
    <source id ="aud_src" src="music/horse.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
    </audio>
  <br>
  </div>
</div>

<?php
  echo "<br>";
  if ($handle = opendir('./music')) {
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
	if($entry !== "." && $entry !== ".."){
           echo "<div onclick='song_play()' class='itm'>$entry</div><br>".PHP_EOL;
	}
    }

    closedir($handle);
}
?>
</body>
</html>
