<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<script src="js/recorder.js"></script>
<script src="js/index.js"></script>
</head>

<body>
<h1 id="title">Welcome to Monjoor Ilahee's Website</h1>
<h2 id="subtitle">These is the list of my songs and recitations. To play, double click on any of the listed items.</h2>
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
