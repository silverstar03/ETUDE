<?php

session_start();

include('./db_conn.php');

$u_id = $_POST['userid'];
$u_pw = $_POST['pass'];

$sql = "select * from member_t where userid = '$u_id' and passwd = '$u_pw'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['userid'] = $u_id;
    $_SESSION['pass'] = $u_pw;
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}else{
    echo "<script> alert('아이디나 비밀번호가 존재하지 않습니다.');history.go(-1);</script>";
}