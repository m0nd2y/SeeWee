<?php
include_once ('session.php');
include_once ('phpconfig.php');
if (isset($_SESSION['login']))
	$login = $_SESSION['login'];
else
	$login = false;
?>