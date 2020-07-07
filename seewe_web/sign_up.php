<?php
include_once ('login_check.php');

if ($login)
{
	echo "이미 로그인 되어 있습니다.";
	echo "<a href=main.php>main page</a>";
	
}

extract($_POST);

$mysqli = $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);

$check = "SELECT * FROM user WHERE name = '$name'";

$result = $mysqli->query($check);

if($result->num_rows==1)
{
	$row=$result->fetch_array(MYSQLI_ASSOC);
	if($row['password']==$password)
	{
		$_SESSION['name']=$name;
		$_SESSION['login']=true;
		if(isset($_SESSION['name']) && isset($_SESSION['login']))
		{
			header('Location: ./main.php');
		}
		else
		{
			echo "세션 저장 실패";
		}
	}
	else
	{
		echo "잘못된 이름이거나 비밀번호 입니다.";
		echo "<a href=main.php>main page</a>";
	}
}
else
{
	echo "잘못된 이름이거나 비밀번호 입니다.";
}
?>