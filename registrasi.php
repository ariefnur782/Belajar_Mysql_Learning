<!DOCTYPE html>
<?php
require_once("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI MYSQL LEARNING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <img src="" alt="">
            </div>
            <div class="col-sm-4">

            </div>
        </div>
        <div class="row">
            <?php
            if(isset($_POST['signup'])){
                extract($_POST);
                if(strlen($fname)<3){
                    $error[]='masukkan 3 karakter';
                }
                if(strlen($fname)>20){
                    // MAKSIMALNYA
                    $error[] = 'nama pertama maksimal';
                }
                if(!preg_match("/^[A-Za-z _]*[A-Za-z]+[A-Za-z _]*$/", $fname)){
                    $error[] = 'INVALID ENTRY FIRST NAME. PLEASE ENTER LETTERS without any digit or special symbols like(1,2,3#,$,%,&,*,!,~,^,-,)';
                }
                if(strlen($lname)<3){
                    $error[]='masukkan 3 karakter';
                }
                if(strlen($lname)>20){
                    // MAKSIMALNYA
                    $error[] = 'nama pertama maksimal';
                }
                if(!preg_match("/^[A-Za-z _]*[A-Za-z]+[A-Za-z _]*$/", $lname)){
                    $error[] = 'INVALID ENTRY FIRST NAME. PLEASE ENTER letters without any digital or special symbols like(1,2,3#,$,%,&,*,!,~,^,-,)';
                }
                if(strlen($username)<3){
                    $error[]='masukkan 3 karakter';
                }
                if(strlen($fname)>50){
                    // MAKSIMALNYA
                    $error[] = 'nama pertama maksimal';
                }
                if(!preg_match("/^[A-Za-z _]*[A-Za-z]+[A-Za-z _]*$/", $username)){
                    $error[] = 'Invalid entry for username. Enter lowercase letters without any space and no number at the start- Eg - myusername,
                    okuniqueuser or myusername123';
                }
                if(strlen($email)>50){
                    $error[] = 'Email : MAX LENGTH 50';
                }
                if($passwordConfirm == ''){
                    $error[] = 'Please confirm the pasword.';
                }

                if($password != $passwordConfirm){
                    $error[] = 'Password do not match.';
                }
                if(strlen($password)<5){
                    $error[] = 'The password is 6 character long.';
                }

                if(strlen($password)>20){
                    $error[] = 'Password : max length 20 character not allowed';
                }
                
                $sql = "SELECT * FROM Users WHERE (username='$username ' or
                email='$email');";
                $res=mysqli_query($dbc,$sql);
                if(mysqli_num_rows($res) > 0){
                    $row = mysqli_fetch_assoc($res);

                    if($username == $row['username']){
                        $error[] = 'Username alredy Exist.';
                    }
                    if($email == $row['email']){
                        $error[] = 'Email alredy Exist.';
                    }
                }
                if(!isset($error)){
                    $date=date('Y-m-d');
                    $options = array("cost"=>4);
                    $password = password_hash($password,PASSWORD_BCRYPT,$options);

                    $result = mysqli_query($dbc,"INSERT INTO Users
                    VALUES(null,'$fname','$lname','$username','$email','$password','$date')");

                    if($result){
                        $done=2;


                    }else{
                        $error[] = 'FAILED : SOMETHING WENT WRONG';
                    }

                }
            }
            ?>
            <div class="col-sm-4">
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo'<p class="errmsg">&#x26AD;'.$error.'</p>';
                    }
                }
                ?>

            </div>
            <div class="col-sm-4">
                <?php
                if(isset($done)){
                ?>
                <div class="successmsg"><span style="font-size: 100px;">&#9989;</span>
                <br>YOU HAVE REGISTER SUCCESFULLY. <br><a href="login.php" style="color: #fff;">LOGIN DISINI</a></div>
                <?php } else {?>
                <div class="signup_form">
                    <form action="" method="POST">
                    <img src="img/428033f3f6074b1ea11f15f57a52928a.png" alt="">
                        <div class="form-group">

                            <label class="label_txt">First Name</label>
                            <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){
                                echo $fname;}?>" required="">         
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Last Name</label>
                            <input type="text" class="form-control" name="lname" value="<?php if(isset($error)){
                                echo $lname;}?>" required="">
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php if(isset($error)){
                                echo $username;}?>" required="">
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Email</label>
                            <input type="email" class="form-control" value="<?php if(isset($error)){
                                echo $email;}?>" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Password</label>
                            <input type="password" name="password" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Confirm Password</label>
                            <input type="password" name="passwordConfirm" class="form-control" required="">
                        </div>
                        <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">Registrasi</button>
                        <p>Kamu mempunyai akun? <a href="index.php">LOGIN</a></p>
                        <?php }?>
                    </form>
                </div>
                <div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</html>