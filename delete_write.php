<meta charset="utf-8">
<?
session_start();
if($_SESSION['user_id']!=$_SESSION['writer'])
{
	echo "<script> alert('글 작성자가 아닙니다.'); history.back(); </script>";
	exit();
}

include('./../db_connect.php');
?>
<!-- <script type="text/javascript">
	if(confirm("글을 삭제하시겠습니까?")) {
		<?
		$sql = "DELETE * FROM user WHERE no='$_SESSION['no']";
		$result = mysql_query($sql, $conn);
		?>
	}
	else
	{
		history.back();
	}
</script> -->
<script type="text/javascript">
function del_code(code){
  var isDel = confirm("정말로 삭제하시겠습니까?");
  if(isDel){
   <?
		$sql = "DELETE * FROM user WHERE no='$_SESSION['no']";
		$result = mysql_query($sql, $conn);
		?>
  }
  else{
   return;
  }
 }
</script> 