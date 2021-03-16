<?php
include('./db_conn.php');

$_idx = $_GET['idx'];

$sql = "delete from product where id=$_idx";
$result = mysqli_query($conn, $sql);
// $re = mysqli_fetch_array($result);

echo "<script>alert('삭제되었습니다.'); location.href='inventory.php';</script>";

?>