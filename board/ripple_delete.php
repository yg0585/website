<meta charset="utf-8">

<?
include('./../db_connect.php');
session_start();
if(!isset($_SESSION['user_id']))
{
	echo "<script> alert('로그인 후 이용해주세요.'); location.href='./../login.php'; </script>";
	exit();
}
$ripple_id=$_SESSION['ripple_id'];
$num = $_GET['num'];
$sql = "SELECT * FROM ripple WHERE `num` = '$num'";
$result = mysql_query($sql, $conn);
$row = mysql_fetch_array($result);
$id = $row['id'];
if($_SESSION['user_id'] != $row['id']	){
	echo "<script> alert('댓글 작성자만 삭제할수 있습니다.'); alert('$id'); history.back(-1); </script>";
	exit();
}
mysql_query("DELETE FROM ripple WHERE `num` = '$num' ");
echo "<script> history.back(-1); </script>";


?>