<?php include "config.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="images/logo.png" type="image/png">
	<link rel="icon" type="images/png" href="images/logo.png" sizes="16x16">
	<link rel="icon" type="images/png" href="images/logo.png" sizes="32x32">
	<link rel="icon" type="images/png" href="images/logo.png" sizes="96x96">
	<script type="text/javascript" src="//api.laut.fm/js_tools/lautfm_js_tools.0.10.0.js.min.js" ></script>
    <body style="background-color: <?php echo "$hintergrundfarbe"; ?>">
	<script src="js/responsive-nav.js"></script>
	<title><?php echo "$radioname"; ?> - <?php echo "$slogan"; ?></title>
  <body>
    <header>
      <a href="startseite" class="logo" data-scroll><?php echo "$radioname"; ?></a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item"><a href="startseite">Startseite</a></li>
          <li class="menu-item"><a href="programm">Programm</a></li>
		  <li class="menu-item"><a href="nachrichten">Nachrichten</a></li>
		  <li class="menu-item"><a href="letzte-songs" data-scroll>Letzte Songs</a></li>
          <li class="menu-item"><a href="empfang" data-scroll>Empfang</a></li>
		  <li class="menu-item"><a href="impressum" data-scroll>Impressum</a></li>
          <li class="menu-item active"></div><a href="<?php echo "$externerplayerlink"; ?>" target="_blank">Jetzt streamen</a></li>
        </ul>
      </nav>
    </header>
    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
  </body>
</html>
<br><br><br>