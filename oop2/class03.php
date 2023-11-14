<?php

require "class02.php";
require "trait01.php";
require "trait03.php";
class Admin extends Login
{
    use Users, Product; //su dung cung mot luc hai cai trait
    public function userLogin()
    {
        $user = $this->getUsername();
        $pass = $this->getPassword();
        // $product = $this->getProductName();
        // $price = $this->getProductPrice();
        $checking = $this->checkLogin($user, $pass);
        if($checking) {
            echo "success";
        }else{
            echo "Failure";
        }
    }
}
$admin = new Admin();
$admin->userLogin();