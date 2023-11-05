<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}
function loginUser(){
    if(isset($_POST['btnLogin'])){
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        // echo $username . '---' . $password;
        if(empty($username) || empty($password)){
            //khong nhap user hay password
            //quay tro lai giao dien login
            header('Location:../index.php?state=fail');
        }else{
            //nhap du du lieu
            if($username === 'admin' && $password === '123'){
                //dang nhap dung
                //cho vao trang dashboard
                //luu thong tin dang nhap vao session
                $_SESSION['user'] = $username;

                // thiet lap cookie
                $remenber = trim($_POST['remember'] ?? null);
                if(strtolower($remenber) === 'on'){
                    //cotich
                    setcookie('LoginApp',$username,time()+3600*24*30*6,'/','',0);
                }else{
                    //khong tich
                    setcookie('LoginApp',$username,time()+3600*24,'/','',0);
                }

                header('Location:../dashboard.php');
            }else{
                //dang nhap linh tinh ==> quay ve trang login
                header('Location:../index.php?state=error');
            }
        }

    }
}
loginUser();

?>