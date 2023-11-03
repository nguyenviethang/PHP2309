<?php
//khoi dong session
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
if(isset($_SESSION["username"]) && $_SESSION["email"]){
    //xoa all session
    // session_destroy();
    //xoa tung session
    unset($_SESSION["username"]);//xoa bien trong php, giai phong bien khoi bo nho luu tru
    // unset($_SESSION["email"]);
    header('Location:session02.php');
}