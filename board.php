<?php session_start(); ?>
<html>
    <head>
        <title>PWN82 board</title>
    </head>
    <body>
     <fieldset>
     <h1>PWN82 board </h1>
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
	
        $db_sql="SELECT * from notice_board order by id desc limit $first, $last;";
	$result = mysqli_query($db_conn, $db_sql);

	echo "<table>";

	while ($row = mysqli_fetch_array($result)){
		echo "<tr>";
			echo "<td><b>".$row['nickname']."</b></td>";
                	echo "<th><div OnClick=location.href='board_detail.php?id=".$row['id']."'>".$row['title']."</div></th>";
			echo "<td><b>".$row['up_date']."</b></td>";
		echo "</tr>";
   	}
	$row = mysqli_fetch_array($result);
?>
	<tr>
      	<td colspan='3' style='text-align:right;'>
        	<input type="button" value="글쓰기" Onclick=location.href='board_create.php'>
        </td>
        </tr>

        </table>
    </body>
</html>

