<?php

include('./db_conn.php');

$f_name=$_FILES['userfile']['name'];
$f_type=$_FILES['userfile']['type'];
$f_size=$_FILES['userfile']['size'];
$upload_file=$_FILES['userfile']['tmp_name'];

$idx = $_GET['idx'];
$_name = $_POST['p_name'];
$_price = $_POST['p_price'];
$_cnt = $_POST['p_cnt'];

$uploaddir="./uploads/";
$uploadfile = $uploaddir.$_FILES['userfile']['name'];

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    $query = "update product set p_name='$_name', p_price='$_price', p_cnt='$_cnt', p_path='$uploadfile' where id=$idx";
    mysqli_query($conn, $query);
    
    echo "<script> alert('정보가 수정되었습니다.'); location.href='inventory.php';</script>";
    mysqli_close($conn);
}else{
    echo "<script> alert('파일 업로드를 실패하였습니다.'); history.go(-1);</script>";
}



?>