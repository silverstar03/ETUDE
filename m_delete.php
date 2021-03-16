<?php
session_start();
include('./db_conn.php');

$_idx = $_GET['idx'];
$_pw = $_POST['pass'];

$sql = "select * from member_t where id=$_idx";
$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_array($result);


if($_pw == $re['passwd']){
    $sql = "delete from member_t where id=$_idx";
    mysqli_query($conn, $sql);
    session_destroy();
    echo "<script>alert('탈퇴되었습니다.'); location.href='index.php';</script>";
}else{
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.go(-1);</script>";
}

?>