<?php
require "abstract02.php";

abstract class TestAbs extends TestAbs2
{
    //2 abstract class ke thua nhau
    private $id = 10;
    protected $name = "Teo";
    public $address = "ha noi";
    //abstract class van cho phep dinh nghia class nhu binh thuong
    //abstract class thi co 2 loai phuong thuc duoc tao ra nhu sau:
    //phuong thuc abstract
    abstract public function getName();
    abstract protected function getAddress();
    // abstract private function getPhone();  Sai. vi khong cho phep dinh ghia phuong thuc la abstract o dang private
    //2 - cac phuong thuc binh thuong
    protected function getId()
    {
        return $this->id;

    }
    private function setId($id = 0)
    {
        return $id;
    }
}
// $a = new A();//SAi. abstract khong cho khoi tao doi tuong
// echo $a->getId(); 