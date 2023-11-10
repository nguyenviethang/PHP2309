<?php

class Person
{
    //magic method in oop php
    //cac phuong thuc nay la co san, chi can goi ra su dung
    public $name = "Teo";

    public function __construct($age = 20)//ham khoi tao
    {
        //ham khoi tao
        //tat ca cac magic method cua php deu co dau hieu nhan biet: co hai dau gach duoi lien nhau dung truoc ten phong thuc
        //phuong thuc construct se tu dong chay va chay dau tien nhat khi khoi tao doi tuong trong class
        echo __FUNCTION__ . " running- my age: {$age}";//magic constant(hang so dac biet- hang so dac biet ) --> giup lay ra tien cua phuong thuc dang chay-->__construct 
        echo "<br/>";
    }
    public function __destruct()
    {
        echo"<br/>";
        echo __FUNCTION__ . "is running";
        //ham huy
        //phuong thuc nay se tu dong chay khi co doi tuong duoc khoi tao, tu dong chay cuoi cung.
    }
    public function getName()
    {
        return $this->name;
    }

    public function __call($method, $args)
    {
        //ham nay se tu dong chay khi mot doi tuong truy cap mot phuong thuc khong phai la static va khong ton tai trong class
        //$method: ten phuong thuc khong ton tai trong class
        //$args: mot mang chua toan bo cac tham so cua phuong thuc khong ton tai trong class
        echo "ban da truy cap vao phuong khong ton tai trong class voi ten la {$method}";
        echo "<pre>";
        print_r($args);
    }
    public static function __callStatic($method, $args)
    {
        echo "ban da truy cap vao phuong thuc static phuong khong ton tai trong class voi ten la {$method}";
        echo "<pre>";
        print_r($args);
        
    }
    public function __get($name)
    {
        //method se tu dong chay neu mot doi tuong truy cap vao mot thuoc tinh khong ton tai trong class
        echo "ban vua truy cap vao thuoc tinh {$name} khong ton tai trong class " . __CLASS__;
    }

    public function __set($name, $value)
    {
        echo "ban vua truy cap vao thangnv {$name}" . __CLASS__;
    }

}
$worker = new Person();//lap tuc __construct se tu dong chay, khi viet  new  person thi tuc la khong dung __construct
// echo $worker->getName();
//thong thuong cac magic method de duoi dang public

// $worker->getAge();//khi goi vao mot cai method khong ton tai trong class thi tu dong magic method __call() se chay
// $worker->getAge(10,20,30);
// vua truy cap va vua gan chinh la phuong thuc __set
$worker::getEmail('teo@gmail.com');
echo "<br/>";
$worker->address;
echo "<br/>";
$worker->salary = 1000;
