<meta charset="utf-8">
<?
session_start();
include('./db_connect.php');
$password = $_POST['password'];
$repass = $_POST['repassword'];
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE `id`='$id'";
$result = mysql_query($sql, $conn);
$m = mysql_fetch_array($result);

if($password != $repass)
{
	echo "<script> alert('비밀번호 재확인 값이 다릅니다.'); history.back(-1); </script>";
	exit();
}

if($m['password'] == $password)
{
	echo "<script> alert('이전 비밀번호와 동일합니다.'); history.back(-1); </script>";
	exit();
}


$sql = "UPDATE user SET `password`='$password' WHERE `id`='$id'";
$result = mysql_query($sql, $conn);
echo "<script> alert('회원정보 수정완료'); location.href='./main.php'; </script>";
?>