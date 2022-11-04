<?php
session_start();
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  exit();
} ?>
<?php include "inc/header-admin.php"; ?>
<h2>Informationen:</h2>
<p><b>Uhrzeit und Datum: </b><?php
$datum = date("d.m.Y - H:i");
echo $datum;
?>
<?php echo "<p><b>Stationsname: </b>$radioname"; ?>
<?php echo "<p><b>Stations Slogan: </b>$slogan"; ?>
<?php echo "<p><b>Hintergrundfarbe: </b>$hintergrundfarbe"; ?>
<?php echo "<p><b>Laut.fm Station: /</b>$lautmountpoint"; ?>
	
<hr>
<h2>Webserver Informationen:</h2>
<?php
$http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'? "<p><b>Domain:</b> https://" : "<p><b>Domain:</b> http://";
$dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '',$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
echo $url = $http . $dir;
?>
<?php
echo '<p><b>PHP Version:</b> ' . phpversion();
echo phpversion('tidy')		
?><br>
<a href="phpinfo.php">Mehr PHP Infos</a><br>
<?php
echo '<br><b>Hostname:</b> ';
echo gethostname();
?>
<br><a href="seiten-infos.php">Seiten-Infos</a>
	<form method="post">
  <input type="hidden" name="logout" value="1">
  <input type="submit" value="Abmelden">
</form>
</p>