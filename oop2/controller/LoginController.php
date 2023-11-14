<?php
namespace oop2\controller;
require "../model/LoginModel.php";
use oop2\model\LoginModel;
class LoginController 
{
    private $login;
    public function __construct()
    {
        $this->login = new LoginModel();
    }
}
