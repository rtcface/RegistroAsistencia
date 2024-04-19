<?php
 session_start();
$local_user="root";
$local_pass="123";

$user = $_POST['user'];
$pass = $_POST['pass'];


if($local_user == $user && $local_pass == $pass){   
    $_SESSION["user"] = $user;
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
       header("Location: ../menu.php");
    }else{
        header("Location: ../Fail.html");
    }
    
    
}else{
    header("Location: ../Fail.html");
    die();
}


?>