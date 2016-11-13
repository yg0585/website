<meta charset="utf-8">

<?
session_start();
include('./../db_connect.php');
if($_SESSION['user_id']!=$_SESSION['writer'])
{
	echo "<script> alert('글 작성자가 아닙니다.'); history.back(); </script>";
	exit();
}
$no = $_SESSION['no'];
$id = $_SESSION['user_id'];
$sql = "DELETE FROM board Where num='$no'";
$result = mysql_query($sql, $conn);

echo "<script> alert('글 삭제 완료.'); location.href='./../main.php';</script>";
?>