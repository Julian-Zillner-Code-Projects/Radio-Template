<?php
session_start();
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  exit();
}
?>
<?php
phpinfo();  
?>