<?php  
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['btnLogout'])){
    if(!empty($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    header('Location:../index.php');
}
?>
