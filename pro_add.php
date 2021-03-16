<?php

include('./db_conn.php');

$f_name=$_FILES['userfile']['name'];
$f_type=$_FILES['userfile']['type'];
$f_size=$_FILES['userfile']['size'];
$upload_file=$_FILES['userfile']['tmp_name'];

$_name = $_POST['p_name'];
$_price = $_POST['p_price'];
$_cnt = $_POST['p_cnt'];


$uploaddir="./uploads/";
$uploadfile = $uploaddir.$_FILES['userfile']['name'];
// echo $uploadfile."<br>";
// echo $_name."<br>";
// echo $_price."<br>";
// echo $_cnt."<br>";

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    $sql = "insert into product(p_name, p_price, p_path, p_cnt) values('$_name', $_price, '$uploadfile', $_cnt)";
    mysqli_query($conn,$sql);
    echo "<script>alert('업로드되었습니다.'); location.href='inventory.php';</script>";
}
else{
    echo "<script>alert('파일 업로드를 실패하였습니다.'); history.go(-1); </script>";
}



?>


