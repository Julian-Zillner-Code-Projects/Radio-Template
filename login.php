<?php
require "check.php";
if (isset($failed)) { ?>
<div id="login-bad">Invalid user or password.</div>
<?php } ?>
<form id="login-form" method="post" target="_self">
  <h1>Login</h1>
  <label for="user"><p>Benutzername</p></label>
  <input type="text" name="user" required>
  <label for="password"><p>Passwort</p></label>
  <input type="password" name="password" required>
  <input type="submit" value="Sign In">
</form>
