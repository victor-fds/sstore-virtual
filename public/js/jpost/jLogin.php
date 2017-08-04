<?php
require"../../../private/class/User.class.php";

$lgin = new User;
print $lgin->setLogin($_POST['email'], $_POST['pass']);
?>