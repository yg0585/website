<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- 부가적인 테마 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<div align="center">
		<a href="http://yg05853.dothome.co.kr/main.php"><img  width="200px" height="200px" src="./HELLO GLORY.png"></a>
</div>
<? if(!isset($_SESSION['user_id'])) {?>
	<a href="http://yg05853.dothome.co.kr/login.php"> 로그인 </a>
	<a href="http://yg05853.dothome.co.kr/member.php">회원가입</a>
	<? } ?>
	<? if(isset($_SESSION['user_id'])) {?>
	<a href="http://yg05853.dothome.co.kr/logout.php">로그아웃 </a>
	<a href="http://yg05853.dothome.co.kr/test.php">테스트</a>
	<a href="http://yg05853.dothome.co.kr/board/write.php">글쓰기</a>
	<div style="text-align:right;">
		<a href="./member_info.php"> <? echo $_SESSION['user_id']; ?></a>님 환영합니다.
	</div>
	<? } ?>