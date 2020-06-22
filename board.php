<?php 
	session_start(); 
	include "list_rule.php";
	$page=($_GET['page'])?$_GET['page']:1;
?>
<html>
	<head>
        	<title>PWN82 board</title>
	</head>
	<script>
		function sort(sort, type, page)
		{
			if(type=='asc')
			{
				type='desc';
			}else
			{
				type='asc';
			}	
			location.href='board.php?page=' + page + "&sort=" + sort + "&type=" + type;
			
		}
	</script>
    	<body>
     		<fieldset>
     			<h1>PWN82 board </h1>
     		</fieldset>
<?php
	if($_GET['sort']=='nickname'){ $sort = 'nickname'; }
	else if($_GET['sort']=='title'){ $sort = 'title'; }
	else{ $sort = 'id'; }
	if($_GET['type']=='asc'){ $type = 'asc'; }
	else{ $type = 'desc'; }
	$s_point = ($page-1) * $list;

        $db_sql="SELECT * from notice_board order by $sort $type limit $s_point, $list;";
	$result = mysqli_query($db_conn, $db_sql);
?>
		<table>
			<tr>
			<td style='text-align:center;' onclick='sort("nickname", "<?=$type ?>", "<?=$page ?>");'>작성자</td>
				<td width='250' style='text-align:center;' onclick='sort("title", "<?=$type ?>" , "<?=$page ?>");'>게시글 제목</td>
				<td style='text-align:center;' onclick='sort("id", "<?=$type ?>", "<?=$page ?>");'>작성일</td>
			</tr>
<?php
		for($i=1; $i<=$num; $i++)
		{
			$row = mysqli_fetch_array($result);
?>
			<tr>
				<td style='text-align:center;'><?=$row['nickname'] ?></td>
				<th width='250' style='text-align:center;'>
					<div OnClick=location.href='board_detail.php?id=<?=$row['id']?>'><?=$row['title']?></div>
				</th>
				<td style='text-align:center;'><?=$row['up_date'] ?></td>
			</tr>

<?php		}
		for ($p=$s_page; $p<=$e_page; $p++) 
		{
?>

			<a href="<?=$PHP_SELP?>?page=<?=$p?>&sort=<?=$sort ?>&type=<?=$type ?>"><?=$p?></a>

<?php
		}
?>
		<div>
		<a href="<?=$PHP_SELP?>?page=<?=$s_page-1?>&sort=<?=$sort ?>&type=<?=$type ?>">이전</a>
			<a href="<?=$PHP_SELP?>?page=<?=$e_page+1?>&sort=<?=$sort ?>&type=<?=$type ?>">다음</a>
		</div>
			<tr>
      				<td colspan='3' style='text-align:right;'>
        				<input type="button" value="글쓰기" Onclick=location.href='board_create.php'>
        			</td>
        		</tr>
		</table>
	</body>
</html>

