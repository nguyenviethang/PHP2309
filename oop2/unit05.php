<?php
 require "unit03.php";

 interface B extends A{
    //2 interface ke thua nhau thi dung tu khoa extends
    public function getAge();
    public function getId();
    
 }
