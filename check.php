<?php
session_start();

$_SESSION['err']=[];

// $acc=$_POST['acc'];
accept('acc','帳號欄位不得為空');
length('acc',4,10,'帳號長度應在4-10字間');

// if(empty($acc)){
//     $_SESSION['err']['acc']=true;
// }
// 檢查帳號長度
// if(strlen($acc)>10 || strlen($acc)<4){
//     $_SESSION['err']['acc']['len']=true;
// }

// $pw=$_POST['pw'];
accept('pw');
length('pw',8,16);
// if(empty($pw)){
//   $_SESSION['err']['pw']=true;
// }
// 檢查密碼長度
// if(strlen($pw)>16 || strlen($pw)<8){
//   $_SESSION['err']['acc']['len']=true;
// }

// $name=$_POST['name'];
accept('name','姓名欄位不得為空');
length('name',1,8)

// $email=$_POST['email'];
accept('email');
email('email','email格式錯誤');

$birthday=$_POST['birthday'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];

// print_r($_SESSION['err']);

// 欄位都「檢查完畢」
if(empty($_SESSION['err'])){
  $sql="insert, update, delete, select";
  echo '欄位均符合規範';
  // $pdo->exec($sql);
}

header("location:index.php");

function chk_field(...$arg){
  switch($type){
    case 'accept':
    break;
  }
}

function accept($field,$meg='此欄位不得為空'){
  if(empty($_POST[$field])){
    $_SESSION['err'][$field]['empty']=$meg;

  }
}

function length($field,$min,$max,$meg="長度不足"){
  if(strlen($_POST[$field])>$max || strlen($_POST[$field])<$min){
    $_SESSION['err'][$field]['length']=$meg;

  }
}

function email($field,$meg="email格式錯誤"){
      $email=$_POST[$field];

      if(mb_strpos($email,'@')==false){
        $_SESSION['err'][$field]['email']=$meg; 
      }
      
}

?>