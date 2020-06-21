<?php 
	session_start(); //DB 정보 
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
        $db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);
	
	$id=$_POST['loginID']; 
	$password=$_POST['loginPASSWORD']; 
	echo "$id $password";
	$db_sql="SELECT * FROM user_info where user_id='$id' and user_password='$password';";
	echo $db_sql;	

	 $result = mysqli_query($db_conn, $db_sql);

        if($result === false){
                echo mysqli_error($conn);
        }

        $row = mysqli_fetch_array($result);
	if($id==$row['user_id'] && $password==$row['user_password']){ // id와 pw가 맞다면 login

   		$_SESSION['id']=$row['user_id'];
   		$_SESSION['nickname']=$row['user_nickname'];
   		echo "<script>location.href='board.php';</script>";

	}else{ // id 또는 pw가 다르다면 login 폼으로
   		echo "<script>window.alert('invalid username or password');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
  		echo "<script>location.href='login_page.php';</script>";
	}
?>
