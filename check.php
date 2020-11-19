<?php
session_start();

$_SESSION['err']=[];

$acc=$_POST['acc'];
if(empty($acc)){
    $_SESSION['err']['acc']=true;
}
// 檢查帳號長度
if(strlen($acc)>10 || strlen($acc)<4){
    $_SESSION['err']['acc']['len']=true;
}

$pw=$_POST['pw'];
if(empty($pw)){
  $_SESSION['err']['pw']=true;
}
// 檢查密碼長度
if(strlen($pw)>16 || strlen($pw)<8){
  $_SESSION['err']['acc']['len']=true;
}


$name=$_POST['name'];
$birthday=$_POST['birthday'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$email=$_POST['email'];


// print_r($_SESSION['err']);

// 欄位都「檢查完畢」
if(empty($_SESSION['err'])){
  $sql="insert, update, delete, select";
  $pdo->exec($sql);
}

header("location:index.php");
?>