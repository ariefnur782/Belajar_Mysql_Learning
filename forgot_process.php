<?php
require_once("config.php");
if(isset($_POST['subforgot'])){
    $login = $_REQUEST['login_var'];
    $query = "SELECT * FROM Users WHERE (username='$login' OR email = '$login')";
    $res = mysqli_query($dbc,$query);
    $result = mysqli_fetch_array($res);
    if($result){
        $findresult = mysqli_query($dbc, "SELECT * FROM Users WHERE (username = '$login' OR email = '$login')");
        if($res = mysqli_fetch_array($findresult)){
          $oldfemail = $res['email'];
        }
    }
}
?>