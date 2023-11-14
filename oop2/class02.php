<?php

class Login
{
    public function checkLogin($user, $password)
    {
        if($user === 'admin' && $password = '123'){
            return true;
        }
        return false;
    }
}