<?php

include('./db_conn.php');

$_userid = $_POST['userid'];
$_username = $_POST['userName'];
$_pw = $_POST['pass'];
$_pwcheck = $_POST['passcheck'];
$_tel = $_POST['phone'];

// 비밀번호 확인
if($_pw == $_pwcheck){
    $sql = "insert into member_t(userid, passwd, username, tel) values('$_userid', '$_pw', '$_username', '$_tel')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}else{
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.go(-1);</script>";
}

?>
<script>
alert('회원가입이 완료되었습니다.');
location.href='login.php';
</script>