<?php
//dinh nghia interface
//ban chat cua interface trong php: giup trien khai tinh chat truu tuong trong lap trinh huong doi tuong

interface A
{
    // public $name = "teo";
    //interface : khong cho phep dinh nghia thuoc tinh ben trong nay vi interfaca no khong phai la 1 class
    // public function getName()
    // {
    //     return "ty";
    // }
    //Sai. vi trong interface khong cho phep dinh nghia phoung thuc co body function - chi cho phpe dinh nghia thuoc phuong thuc rong
    public function getName();
    // protected function getAge();//cac phuong thuc trong interface chi duoc phep dinh nghia o dang public
    public function getEmail();
    public function getPhone();

}
// $a = new A(); //sai: vi inerface khong phai la class nen no khong the khoi tao doi tuong duoc.