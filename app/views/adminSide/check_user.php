<?php
    session_start();
    ob_start();
    include('../connect.php');

    if(isset($_SESSION['uid'])){
        $uid=$_SESSION['uid'];

        $verify = $con->prepare("SELECT access_token FROM user WHERE id='$uid'");
        $res=  $verify->execute();
       // $res = $verify->fetch(PDO::FETCH_ASSOC);
        if($res){
            $r = $verify->fetch(PDO::FETCH_ASSOC);
            $auth_code = $r['access_token'];

            if($auth_code != $_COOKIE['PHPSESSID']){
                header("Location: ../html/login.php");
                 exit(); 
            }
        }

    }
    else {
        header("Location: ../html/login.php");
        exit();
    }
    
?>