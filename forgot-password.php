<!DOCTYPE html>
<?php
require_once("config.php");
if(isset($_SESSION["login_sess"])){
    header("location:account.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    <form action="forgot_process.php" method="POST">
    <div class="login_form">
    <div class="form_group">
    <img src="" alt="">
    <label class="label_txt">Username Or Name</label>
    <input type="text" name="login_var" value="<?php if(!empty($err)){
        echo $err;}?>" class="form-control" required="">
    </div>
    <button type="submit" name=""subforgot class="btn btn-primary btn-group-lg
    form_btn">Kirim Email</button>
    </div>
    </form>
    <br>
    <p>Have an account? <a href="login.php">LOGIN</a></p>
    <p>Kamu tidak memiliki akun? <a href="registrasi.php">Registrasi</a></p>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</html>