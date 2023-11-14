<?php
require "unit01.php";
class Student extends Person 
{   
    //class Student ke thua class Person(keyword:extends)
    //khi ma class Student ke thua class Person thi no se duoc phep su dung nhung gi ma class cha(Person cho phep)
    //trong php khong ho tro khai niem da ke thua
    //cthe nao la da ke thua?
    //classA, classB, classC
    //A extends B, C // sai khong co dieu nay trong php
    //A extends B
    //B extends  C
    //-> A extends C
    //override - ghi de lai phuong thuc cua class cha truyen xuong
    public function __construct()
    {
        parent::__construct(); //goi constructor cua class cha
        echo "Class -" . __CLASS__;
        echo "<br/>";
    }
    public function getName()
    {
        return "ty";
    }
    public function getMyName()
    {
        //dang goi phuong thuc getName cua class Student
        // return $this->getName();
        //goi phong thuc getName cuar class Person(class cha)
        return parent::getName();
    }
}
$cntt = new Student();
echo $cntt->getMyName();