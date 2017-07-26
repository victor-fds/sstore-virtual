<?php
require"AdUser.class.php";

$lgin = new AdUser;
print $lgin->getAdmin($_POST['email'], $_POST['pass']);
?>