<?php
include_once ('phpconfig.php');
function back_caution($msg){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "history.back();";
 $str .= "</script>";
 echo("$str");
 exit;
}

extract($_POST);

$mysqli = $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);


$check = "SELECT * FROM user WHERE name = '$name'";

$result = $mysqli->query($check);
if($result->num_rows==1)
	back_caution("중복된 이름입니다.");


$signup = mysqli_query($mysqli,"INSERT INTO user (name,password,phone,message) VALUES ('$name','$password','$phone','$message')");
if($signup){
	back_caution("성공적으로 가입되었습니다."); 
}
?>
