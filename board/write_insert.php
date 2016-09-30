<meta charset="utf-8">
<?
include('./../db_connect.php');
$title=$_POST['title'];
$content=$_POST['content'];
session_start();
$user_id=$_SESSION['user_id'];
$sql="INSERT INTO board(`num`,`id`, `title`, `content`) VALUES('','$user_id' ,'$title','$content')";
$result=mysql_query($sql,$conn);
echo "<script> alert('글 작성 완료'); location.href='http://yg05853.dothome.co.kr'; </script>";
?>