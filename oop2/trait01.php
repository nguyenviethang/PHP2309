<?php
trait Users
{
    private $id = 10;
    protected $name="teo";
    public $address = "Hanoi";
    private $username = "Admin";
    Private $password = "123";
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
}
// $user  = new User();//SAi vi no khong phai la class nen khong khoi tao doi tuong duoc, trong class moi co khai niem khoi tao doi tuong
