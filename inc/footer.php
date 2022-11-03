	<br><center><h3>&copy; <?php 
$aktuellesJahr = date("Y");
echo "Copyright $aktuellesJahr $radioname"; 
?></h3>Alle Rechte vorbehalten - Powered by <a href="https://julianzillner.de" style="color:#ff0000; text-decoration:none;"><font color="black"><b>Julian Zillner</b></font></a>
</center><br><br><br>
<div class="footer-titelanzeige">
	<div id='wrapper'>
<div style='position:relative; float:left; height: auto; width:55px;'><iframe src="https://julianzillner.github.io/Radio-Cover/cover.html?station=<?php echo "$lautmountpoint"; ?>&width=50&height=50" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="50px" width="50px" allowfullscreen></iframe></div>		
<div style='position:relative; float:left; height:auto; width:auto;'><?php
$json_station = file_get_contents("http://api.laut.fm/station/".$lautmountpoint."/current_song");
$obj_info = json_decode($json_station);
$artist = $obj_info->artist->name;
$titel = $obj_info->title;
echo "".$artist." </br> ".$titel."";
?></div>
</div></div>
<div style='clear:left;'></div>
</div>
