<meta charset="utf-8">
<?
	session_start();

	$id = $_SESSION['user_id'];
	$password = $_POST['password'];
	include('./db_connect.php');
	$sql = "SELECT password FROM user WHERE id = '$id'";
	$result = mysql_query($sql, $conn);
	$getPass = mysql_fetch_array($result);
	if($password != $getPass['password'])
	{
		echo "<script> alert('비밀번호가 틀려'); history.back(); </script>";
	}
		$_SESSION['edit'] = 1;
		echo "<script>location.href='./member_edit.php';</script>";
	
?>
