<?php
include "db.php";

$db_sql="SELECT count(*) as cnt from notice_board;";
$result = mysqli_query($db_conn, $db_sql);
$row = mysqli_fetch_array($result);

$page = ($_GET['page'])?$_GET['page']:1;

$num = $row['cnt'];
$list=2;
$block=3;

$pageNum = ceil($num/$list); // 총 페이지
$blockNum = ceil($pageNum/$block); // 총 블록
$nowBlock = ceil($page/$block);

$s_page = ($nowBlock * $block) - 2;
if ($s_page <= 1) {
    $s_page = 1;
}
$e_page = $nowBlock*$block;
if ($pageNum <= $e_page) {
    $e_page = $pageNum;
}
?>
