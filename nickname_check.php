<?php
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
        $db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);

	$nickname = $_GET["nickname"];
	
	$db_sql = "select * from user_info where user_nickname='".$nickname."'";
	$result = mysqli_query($db_conn, $db_sql);
	$row = mysqli_fetch_array($result);
	if($row==null)
	{
?>
	<div><?php echo $nickname; ?>는 사용가능한 닉네임입니다.</div>
<?php 
	}else{
?>
	<div><?php echo $nickname; ?>중복된 닉네임입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
