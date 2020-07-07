<?php
include_once('login_check.php');
if($login)
	header('Location: ./page10.php');
else
	header('Location: ./page1.html');
?>