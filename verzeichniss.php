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
<?php
$handle=opendir (".");
echo "<h1>Verzeichnisinhalt:</h1>";
while ($datei = readdir ($handle)) {
 echo "$datei<br>";
}
closedir($handle);
?>