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
<?
	include('./header.php');
?>
	

<?
$sql = "SELECT * FROM board ORDER BY `num` ASC";
$result = mysql_query($sql, $conn);

?>
<div>
	<table class="table">
		<tr>
			<td>
			번호
			</td>
			<td>
			글 작성자
			</td>
			<td>
			글 제목
			</td>
		</tr>
	<? while ($row = mysql_fetch_array($result)) {
		 ?>
		<tr>
			<td>
				<a href="./board/read.php?num=<?echo $row['num'];?>"><? echo $row['num']; ?></a>
			</td>
			<td>
				<a href="./board/read.php?num=<?echo $row['num'];?>"><? echo $row['id']; ?></a>
			</td>
			<td>
				<a href="./board/read.php?num=<?echo $row['num'];?>"><? echo $row['title']; ?></a>
			</td>
			<td>
			</td>	
		</tr>
	<? 
	}
	?>
	</table>
</div>
<?
include('./footer.php');
?>
</body>
</html>	