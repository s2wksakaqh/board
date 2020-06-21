<html>
    <head>
        <title>PWN82 board</title>
    </head>
    <body>
     <fieldset>
	<h1>PWN82 board</h1>
     </fieldset>
<?php
if($_GET['list']==null)
{
	$first=0;
}else
{
	$first = $_GET['list'];
}
	$last=$first+5;
	$db_hostname='localhost';
        $db_user='sqladmin';
        $db_password='wjdtlgjs123';
        $db_name='board';
        $db_conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);
        $db_sql="UPDATE notice_board SET hit = hit+1 where id=".$_GET['id'].";";
	$result = mysqli_query($db_conn, $db_sql);
	
        $db_sql="SELECT * from notice_board where id=".$_GET['id'].";";
	$result = mysqli_query($db_conn, $db_sql);
	$row = mysqli_fetch_array($result); 
	echo "<table border='1'>";

		echo "<tr>";
			echo "<td>제목</td><td colspan='3'>".$row['title']."</td>";
			echo "<td>작성자</td><td><b>".$row['nickname']."</b></td>";
			echo "<tr><td>내용</td><td colspan='5'>".$row['contents']."</td></tr>";
			echo "<tr><td>첨부파일</td>";
			
			if($row["up_file"]!=null)
			{
				echo "<td OnClick=location.href='file_download.php?file=".$row['up_file']."'>a</td>";
			}
			else
			{
				echo "<td></td>";
			}
			 
			echo "<td>조회수</td><td>".$row['hit']."</td>";
			echo "<td>날짜</td><td>".$row['up_date']."</td></tr>";
		echo "</tr>";
?>
	
		<tr>
			<td colspan='6' style='text-align:right;'>
				<input type='button' value='글쓰기' OnClick=location.href='board_create.php'> 
				<input type='button' value='수정' OnClick=location.href='board_modify.php?id=<?=$row["id"] ?>'> 
			</td>
		</tr>
        </table>
    </body>
</html>

