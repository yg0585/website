<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<?
	include('./../db_connect.php');
	session_start();
	if(!isset($_SESSION['user_id'])){
		echo"<script>alert('로그인 하고 글 써'); history.back(); </script>";
	}
	?>
	<title></title>
</head>
<body>
	<div align="center">
		<form action="./write_insert.php" method="post">
			<input type="text" name="title">
			<br><br>
			<textarea cols="100" rows="10" name="content">
				
			</textarea><br>
			<input type="submit" value="글쓰기">
		</form>
	</div>
</body>
</html>