<meta charset="utf-8">
<?
	include('./db_connect.php');
	$user_id=$_POST['id'];
	$user_password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$user_name=$_POST['name'];
	$user_phone=$_POST['phone'];
 
	$sql = "SELECT id FROM user Where id='$user_id'";
	$result = mysql_query($sql, $conn);
	
	if($user_password != $repassword)
	{
		echo "<script> alert('비밀번호와 재확인 값이 다릅니다.'); history.back(); </script>";
	}

	if($user_id=="" || $user_password=="" || $repassword=="" || $user_name=="" || $user_phone==""){
		echo "<script> alert('필수 개인정보를 모두 입력해주세요.'); history.back(); </script>";
	}

	if(mysql_num_rows($result) > 0){
		echo"<script> alert('이미 가입된 아이디입니다.'); history.back(); </script>";
		exit();
	}

	$sql = "INSERT INTO user(`num`,`id`,`password`,`name`,`phone`) VALUES('', '$user_id','$user_password','$user_name','$user_phone')";
	$result =mysql_query($sql, $conn);
	echo "<script> alert('회원가입이 완료되었습니다.'); location.href='http://yg05853.dothome.co.kr'; </script>";
?>