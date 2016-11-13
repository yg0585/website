<!DOCTYPE html>
<html>
<head>
  <script>
function next(){
 if(confirm("글을 삭제하시겠습니까?"))
 {
  location.href="./delete_write.php";
 }
 else
 {
 alert('아니오를 누르셨습니다');
 history.back(-1);
 }
}

</script> 

	<meta charset="utf-8">
	<title></title>
	<?
  session_start();  
		include('./../db_connect.php');
		include('./../header.php');
        $no=$_GET['num'];         
        $sql="SELECT * FROM board WHERE num='$no'";
		$result=mysql_query($sql, $conn);         
		$read=mysql_fetch_array($result);
		       
		$_SESSION['writer']=$read['id'];
		$_SESSION['no']=$no;
		$sql_1 = "SELECT * FROM ripple WHERE `parent` = '$no'";
		$result_1 = mysql_query($sql_1,$conn);      
		?> 
</head>
<body>     
<a onclick="next()">글 삭제</a><br>    
	 <div align="center">
<p><? echo $read['id']; ?></p>         
<textarea class="form-control" style="width: 1000px;" rows="10"> <?echo $read['content'];?></textarea>
	</div>
	<div align="" style="margin-left:15%; margin-top:5%;">
		<table>
		<? while( $row = mysql_fetch_array($result_1)){
			$_SESSION['ripple_id']=$row['id'];
			?>
			<script>
			function next_1(){
 if(confirm("댓글을 삭제하시겠습니까?"))
 {
  location.href="./ripple_delete.php?num=<? echo $row['num']; ?>";
 }
 else
 {
 alert('아니오를 누르셨습니다');
 history.back(-1);
 }
}
</script> 
			<tr>
				<td width="">
				<? echo $row['name']; ?>
				</td>
				<td width="10%">
				<? echo $row['date']; ?>
				</td>
				<td width="60%">
				<font style="font-weight:bold;"><? echo $row['content']; ?></font>
				</td>
				<td>
				<a onclick="next_1()"> 댓글 삭제</a>
				</td>
			</tr>
			<? } ?>
		</table>
	</div>
	<div align="center" style="margin-top: 5%;">
		<form action="./ripple_input.php" method="post">
			<textarea name="content" style="width: 600px;" rows="5"></textarea>
			<input type="submit"  value="댓글 입력">
		</form>
	</div>
 </body> 
 </html>
