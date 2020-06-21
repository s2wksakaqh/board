<?php
	session_start();
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
	$db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);
        $db_sql="DELETE from notice_board WHERE id='".$_GET['id']."';";
	$result = mysqli_query($db_conn, $db_sql);
?>
	<script> location.href='board.php' </script>;
