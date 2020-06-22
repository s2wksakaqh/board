<?php 
	session_start(); 

	include 'db.php';

	//SQL 인젝션 필터링 추가
	$id = $_POST['loginID']; 
	$pw = $_POST['loginPASSWORD']; 
	$db_sql="SELECT * FROM user_info where user_id='$id' and user_password='$pw';";
	$result = mysqli_query($db_conn, $db_sql);

        $row = mysqli_fetch_array($result);
	if($id==$row['user_id'] && $pw==$row['user_password'])
	{
   		$_SESSION['id']=$row['user_id'];
   		$_SESSION['nickname']=$row['user_nickname'];
   		echo "<script>location.href='board.php';</script>";

	}else
	{ 
		echo "<script>alert('아이디 또는 비밀번호가 올바르지 않습니다.'); location.href='login_page.php';</script>"; 
	}
?>
