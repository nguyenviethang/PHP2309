<?php
require "unit05.php";
class Demo implements B
{
    //day la 1 class ke thua 1 interface: dung tu khoa: mplements khong dung tu khoa extends
    //khi mot class ke thua 1 inerface thi class do bat buoc phai override lai toan bo cac phuong thuc cua interface
    public function getName()
    {
        return "ty";
    }
    public function getEmail()
    {
        return "teo@gmail.com";
    }
    public function getPhone()
    {
        return "0123456789";
    }
    public function getAge()
    {
        return 20;
    }
    public function getId()
    {
        return "BH001";
    }
}
$demo = new Demo();
echo $demo->getPhone();