<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<?
	session_start();
	include('./db_connect.php');
	include('./header.php');
	$id = $_SESSION['user_id'];
	if($_SESSION['edit']!=1)
	{
		echo "<script> alert('잘못된 접근입니다.'); location.href='./main.php'; </script>";
	}
	$sql = "SELECT * FROM user WHERE `id`='$id'";
	$result = mysql_query($sql, $conn);
	$m = mysql_fetch_array($result);
	?>
</head>
<body>
	<div>
		<form  action="./member_up.php" method="post">
		 	<p>아이디 <? echo $_SESSION['user_id']; ?> </p>
		 	<p>이름 <? echo $m['name']; ?> </p>
		 	<p>비밀번호 <input type="password" name="password"> </p>
		 	<p>비밀번호 <input type="password" name="repassword"> </p>
		 	<input type="submit" name="" value="회원정보 수정">
		 </form>
	</div>
</body>
</html>