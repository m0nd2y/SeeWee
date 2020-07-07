<?php

function goto_caution($msg, $url){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "location.href = '{$url}';";
 $str .= "</script>";
 echo("$str");
 exit;
}
	goto_caution("로그인이 필요합니다.","page1.html");
?>