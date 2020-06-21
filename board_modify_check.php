<?php
	session_start();
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
	$db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);
	if($_SESSION['nickname']!=$_POST['nickname'])
	{
		echo "<script>alert('잘못된 접근입니다.');location.href='board_detail.php?id=".$_GET['id']."'</script>";
	}
        $db_sql="UPDATE notice_board SET title='".$_POST['title']."', contents='".$_POST['content']."' where id=".$_POST['id'].";";
	$result = mysqli_query($db_conn, $db_sql);
?>
	<script> location.href='board.php' </script>;
