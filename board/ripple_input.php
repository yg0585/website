<?
include('./../db_connect.php');
session_start();
if(!isset($_SESSION['user_id'])){
	echo"<script> alert('로그인하고 댓글을 입력하세요.'); location.href='./../login.php'; </script>";
	exit();
}

$parent = $_SESSION['no'];
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE `id`='$id'";
$result = mysql_query($sql, $conn);
$name = mysql_fetch_array($result);
$myname = $name['name'];
$content = $_POST['content'];
mysql_query("INSERT INTO ripple(`parent`, `id`, `name`, `content`) VALUES('$parent', '$id','$myname','$content')");
echo "<script> history.back(-1); </script>";
?>