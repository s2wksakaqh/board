<?php
	session_start();
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
	$db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);
        $db_sql="SELECT * from notice_board where id=".$_GET['id'].";";
	$result = mysqli_query($db_conn, $db_sql);
	$row = mysqli_fetch_array($result); 
	if($_SESSION['nickname']!=$row['nickname'])
	{
		echo "<script>alert('잘못된 접근입니다.');location.href='board_detail.php?id=".$_GET['id']."'</script>";
	}
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
                        <form enctype='multipart/form-data' method="post" action='board_modify_check.php'>
                                <tr>
                                        <td>제목</td>
					<td><input type='text' name='title' value='<?=$row['title']?>'></td>
                                        <td>작성자</td>
					<td><?=$row['nickname']?></td>
                                </tr>
                                <tr>
                                        <td>내용</td>
					<td colspan='3'><textarea name='content'><?=$row['contents'] ?></textarea></td>
                                </tr>
                                <tr>
                                        <td>파일</td>
                                        <td colspan='3'><input type="file" name="upfile" value="<?=$row['up_file']?>"/></td>
                                </tr>
                                <tr>
                                        <td colspan='4' style='text-align:right;'>
                                                <input type="submit" value="수정">
						<input type='button' value='삭제' OnClick=location.href="board_delete.php?id=<?=$row['id'] ?>"> 
                                                <input type="button" value="목록" Onclick=location.href='board.php'>
                                        </td>
				</tr>
				<input type='hidden' name='id' value='<?=$row['id']?>'>
				<input type='hidden' name='nickname' value='<?=$row['nickname']?>'>

                        </form>
                </table>
	</body>
</html>

