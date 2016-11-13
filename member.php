<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<? 
		
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	 <form action="./member_into.php" method="post">
	 	<input class="form-control" type="text" minlength="6" maxlength="15" name="id" placeholder="ID (6글자 이상 입력하세요.)"> <br>
		<input class="form-control" type="password" minlength="6" maxlength="20" name="password" placeholder="패스워드를 입력하세요"> <br>
		<input class="form-control" type="password"  name="repassword" placeholder="패스워드를 한번 더"> <br>
		<input class="form-control" type="text" name="name" placeholder="이름"> <br>
		<input class="form-control" type="text" name="phone" placeholder="전화번호"> <br>
		<input  class="form-control" type="submit" name="" value="회원가입"> <br>	 	
	 </form>
</body>
</html>