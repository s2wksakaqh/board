<?php
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
	$db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);
?>

<html>
	<head>
        	<title>PWN82 board</title>
    	</head>
	<body>
     		<fieldset>
			<h1>PWN82 board</h1>
     		</fieldset>
		<table>
			<form method="POST" action='board_create_check.php'>
				<tr>
					<td>제목</td>
					<td><input type='text' name='title'></td>
				</tr>
				<tr>
					<td>내용</td>
					<td><textarea name='content'></textarea></td>
				</tr>
				<tr>
					<td>파일</td>
					<td><input type="file" name="upfile"/></td>
				</tr>
				<tr>
					<td colspan='2' style='text-align:right;'>
						<input type="submit" value="저장">
						<input type="button" value="목록" Onclick=location.href='board.php'>
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>
