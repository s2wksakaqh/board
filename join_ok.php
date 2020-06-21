<?php 
	$db_hostname='localhost'; 
	$db_user='sqladmin'; 
	$db_password='wjdtlgjs123'; 
	$db_name='board'; 
	$db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name); 
	

	$nm_name=$_POST['nm_name'];
	$nm_nickname=$_POST['nm_nickname'];
	$nm_id=$_POST['nm_id'];
	$nm_pw=$_POST['nm_pw'];
	$nm_mobile=$_POST['nm_mobile'];
	$nm_email=$_POST['nm_email'];
	$nm_addr=$_POST['nm_addr'];
	$nm_idnum=$_POST['nm_idnum'];
	
	$db_sql="
		insert into user_info (
		user_id,
		user_password,
		user_name,
		user_email,
		user_nickname,
		user_address,
		user_mobile,
		user_id_num) 
		values('".$nm_id."','".$nm_pw."','".$nm_name."','".$nm_email."','".$nm_nickname."','".$nm_addr."','".$nm_mobile."','".$nm_idnum."');";

	$result = mysqli_query($db_conn, $db_sql);

?>
<script>alert("join success"); location.href="/login_page.php"; </script>	
