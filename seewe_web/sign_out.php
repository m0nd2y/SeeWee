<?php
include_once ('session.php');

$res=session_destroy();
if($res)
{
	header('Location: ./main.php');
}
?>