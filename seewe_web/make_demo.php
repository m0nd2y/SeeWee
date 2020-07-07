<?php
include_once ('login_check.php');

function back_caution($msg){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "history.back();";
 $str .= "</script>";
 echo("$str");
 exit;
}

if ($login == false)
	header('Location: ./need_login.php');

extract($_POST);

$mysqli = $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);


$check = "SELECT * FROM demo WHERE title = '$title'";

$result = $mysqli->query($check);

if ($result)
	if($result->num_rows==1)
	{
		back_caution("이미 등록된 시위 입니다.");
	}
$boss = $_SESSION['name'];
$demoup = mysqli_query($mysqli,"INSERT INTO demo (title,descriptioin,boss,date,tag) VALUES ('$title','$descriptioin','$boss','$date','$tag')");
if($demoup){
	back_caution("성공적으로 시위가 추가되었습니다.");
}
?>
