<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();   

}
function checkUserLogin() {
    if(empty($_SESSION['user'])){
        return false;
    }
    return true;

}