<?php
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
        $db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);

	$id = $_GET["id"];
	$sql = "select * from user_info where user_id='".$id."'");
	$result = mysqli_query($db_conn, $db_sql);
	$row = fetch_array(result);
	if($row==0)
	{
?>
	<div><?php echo $id; ?>는 사용가능한 아이디입니다.</div>
<?php 
	}else{
?>
	<div><?php echo $uid; ?>중복된아이디입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
