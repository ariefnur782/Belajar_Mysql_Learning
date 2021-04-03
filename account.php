<!DOCTYPE html>
<?php
require_once("config.php");
if(!isset($_SESSION["login_sess"])){
    header("location:index.php");
}
$email = $_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM Users WHERE email = '$email'");
if($res = mysqli_fetch_array($findresult)){
    $username = $res['username'];
    $fname = $res['fname'];
    $lname = $res['lname'];
    $email = $res['email'];
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <form action="login_procces.php" method="POST">
    <div class="login_form">
    <p><a href="home.php"><span style="color: red;float: right;">Silahkan Masuk</span></a></p>
    <p>WELCOME ! <span style="color: #33cc00;"><?php echo $username;?></span></p>
    <table class="table">
    <tr>
    <th>First Name</th>
    <td><?php echo $fname; ?></td>
    </tr>
    <tr>
    <th>Last Name</th>
    <td><?php echo $lname; ?></td>
    </tr>
    <tr>
    <th>Username</th>
    <td><?php echo $username; ?></td>
    </tr>
    </table>
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</html>