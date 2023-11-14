<?php

require "abstract01.php";

class Demo extends TestAbs
{
    //khi 1 class ke thua 1 abstrat class thi class duoc ke thua phai averride lai toan bo cac phuong thuc la abstract cua abstract class
    public function getName()
    {
        return $this->name;
    }
    protected function getAddress()
    {
        return $this->address;
    }
    public function getScore()
    {

    }
    public function getUsers()
    {
        
    }
}
$demo = new Demo();
echo $demo->getName();

