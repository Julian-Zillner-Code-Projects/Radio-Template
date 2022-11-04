<?php
require "check.php";
if (isset($failed)) { ?>
<div id="login-bad">Falscher Benutzer oder Passwort.</div>
<?php } ?>
<meta name="viewport" content= "width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="style-admin.css" rel="stylesheet" type="text/css"> 
<form id="login-form" method="post" target="_self">
  <h1>Login</h1>
  <label for="user"><p>Benutzername</p></label>
  <input type="text" name="user" required>
  <label for="password"><p>Passwort</p></label>
  <input type="password" name="password" required>
  <input type="submit" value="Sign In">
</form>
