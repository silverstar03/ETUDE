<?php

include('./db_conn.php');

$idx = $_GET['idx'];
$_pw = $_POST['pass'];
$_pwcheck = $_POST['passcheck'];
$_tel = $_POST['phone'];


$query = "update member_t set passwd='$_pw', tel='$_tel' where id=$idx";
mysqli_query($conn, $query);

if($_pw == $_pwcheck){
    $query = "update member_t set passwd='$_pw', tel='$_tel' where id=$idx";
    mysqli_query($conn, $query);
    
    echo "<script> alert('정보가 수정되었습니다.'); location.href='index.php';</script>";
    mysqli_close($conn);
}else{
    echo "<script> alert('비밀번호가 일치하지 않습니다.'); history.go(-1);</script>";
}

?>