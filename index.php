<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
  <form action="check.php" method="post" class="mx-auto">
      <ul class="list-group col-md-6 mx-auto">
         <li class="list-group-item">
         *帳號：<input type="text" name="acc">
         <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['acc']['empty'])){ ;?><br>
         <span style="color:red; font-size:12px">帳號不得為空</span>
         <?php } ;?>
         <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['acc']['len'])){ ;?><br>
         <span style="color:red; font-size:12px">欄位長度不符(4-10)</span>
         <?php } ;?>
         </li>
         
         <li class="list-group-item">
         *密碼：<input type="password" name="pw">
         <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['pw']['empty'])){ ;?><br>
         <span style="color:red; font-size:12px">密碼不得為空</span>
         <?php } ;?>
         <?php if(!empty($_SESSION['err']) && isset($_SESSION['err']['pw']['len'])){ ;?><br>
         <span style="color:red; font-size:12px">欄位長度不符(8-16)</span>
         <?php } ;?>
         
         </li>

         <li class="list-group-item">姓名：<input type="text" name="name"></li>
         <li class="list-group-item">生日：<input type="date" name="birthday"></li>
         <li class="list-group-item">地址：<input type="text" name="addr"></li>
         <li class="list-group-item">電話：<input type="text" name="tel"></li>
         <li class="list-group-item">email：<input type="text" name="email"></li>
      </ul>

    <div class="mx-auto" style="width:200px">
      <input class="btn btn-primary" type="submit" value="註冊">
      <input class="btn btn-dark" type="reset" value="重置">
    </div>
  
  </form>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



</body>
</html>