
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN MYSQL LEARNING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <div class="login_form">
    <img src="img/428033f3f6074b1ea11f15f57a52928a.png" class="logo img-fluid" style="background-position: center;">
    <?php
    if(isset($_GET['loginerror'])){
      $loginerror=$_GET['loginerror'];
    }
    if(!empty($loginerror)){
      echo'<p class="errmsg">ADA YANG SALAH!</p>';}?>
    <form action="login_process.php" method="POST">
  <div class="form-group">
    <label class="label_txt">Username Or Email</label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){
      echo $loginerror;}?>" class="form-control">
  </div>
  <div class="form-group">
    <label class="label_txt">Password</label>
    <input type="password" name= "password" class="form-control">
  </div>
  <button type="submit" name="sublogin" class="form_btn btn-primary">Login</button>
</form>
<p style="font-size: 12px; text-align: center; margin-top: 10px;"><a href="forgot-password.php" style="color: #00376b;"></a></p>
<br>
<p>TIDAK MEMILIKI AKUN ?
<a href="registrasi.php">REGISTRASI</a></p>
</div>
    </div>
    <div class="col-sm-4"></div>
    </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</html>