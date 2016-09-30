<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?
	session_start();
	include('./db_connect.php');
	?>
</head>
<body>

	<? if(!isset($_SESSION['user_id'])) {?>
	<a href="/login.php"> 로그인 </a>
	<a href="./member.php">회원가입</a>
	<? } ?>
	<? if(isset($_SESSION['user_id'])) {?>
	<a href="./logout.php">로그아웃 </a>
	<a href="./test.php">테스트</a>
	<a href="./board/write.php">글쓰기</a>
	<div style="text-align:right;">
		<a> <? echo $_SESSION['user_id']; ?></a>
	</div>
	<? } ?>

<?
$sql = "SELECT content FROM user ORDER BY `num` ASC";
$result = mysql_query($sql, $conn);
$row = @mysql_fetch_array($result);
?>
<table>
	<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>	
	</tr>
</table>
</body>
</html>	