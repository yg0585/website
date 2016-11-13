<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- 부가적인 테마 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<?
	session_start();
	include('./header.php');
	if(!isset($_SESSION['user_id']))
	{
		echo "<script>alert('로그인하고 이용해'); history.back();</script>";
	}
	// $id = $_SESSION['user_id'];
	// include('./db_connect.php');
	// $sql = "SELECT * FROM user WHERE id = '$id'";
	// $result = mysql_query($sql, $conn);
	?>	
</head>
<body>
	<!-- <form action="./member_info_ok.php" method="post">
		<div>
			 <p> <?echo $_SESSION['user_id']; ?></p>
			 <input type="password" name="password" placeholder="비밀번호를 입력하세요"><br>
			 <input type="submit" value="확인" name="">
		</div>
	</form> -->
	<form class="form-horizontal" action="./member_info_ok.php" method="post">
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <p class="form-control-static"> <?echo $_SESSION['user_id']; ?> </p>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input width="10px" type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Confirm identity</button>
  </div>
</form>
</body>
</html>