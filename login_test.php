<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<? 
include('./db_connect.php');

if(!isset($_POST['id']) || !isset($_POST['password'])) exit;
$user_id = mysql_real_escape_string($_POST['id']);
$user_password = $_POST['password'];
$sql = "SELECT id FROM user WHERE id='$user_id'";
$result = mysql_query($sql, $conn);
$getID = mysql_fetch_array($result);


if($getID['id'])
{
	$sql = "SELECT password FROM user WHERE id='$user_id'";
	$result = mysql_query($sql, $conn);
	$getPass = mysql_fetch_array($result);
	if($user_password != $getPass['password'])
	{
		echo "<script> alert('패스워드가 틀립니다');  history.back(); </script>";
		exit();
	}
	session_start();
	$_SESSION['user_id'] = $_POST['id'];
	echo "<script> location.href='/main.php' </script>";	
}
else
{
	echo "<script> alert('아이디를 다시 입력해주세요.');  history.back(); </script> ";
}
?>
	<title></title>
</head>
<body>

</body>
</html>

