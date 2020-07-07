<?
/*=======================================================================
@ 파일명 : alert.php
@ 역할 : 경고창에 관한 함수 모음
@ 설명 : 
=======================================================================*/
 
//해당 메시지만 띄우기
function basic_caution($msg){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "</script>";
 echo("$str");
 exit;
}
 
//해당 메시지를 띄우고 그전 페이지로 이동
function back_caution($msg){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "history.back();";
 $str .= "</script>";
 echo("$str");
 exit;
}
 
// 해당 메시지를 띄우고 해당 URL 로 이동
function goto_caution($msg, $url){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "location.href = '{$url}';";
 $str .= "</script>";
 echo("$str");
 exit;
}
 
// 해당 메시지를 띄우고 창을 종료 시킴 
function close_caution($msg){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "window.close();";
 $str .= "</script>";
 echo("$str");
 exit;
}
 
// 해당 주소로 그냥 보냄
function just_go($url){
 $str = "<script>";
 $str .= "location.href = '{$url}';";
 $str .= "</script>";
 echo("$str");
 exit;
}
 
?>