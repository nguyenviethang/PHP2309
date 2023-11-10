<?php
class Animals
{
    public static $name = "Tom - cat";
    private $food = "fish";
    private $eyeColor = "black";
    private static const GENDER = "Male";
    public function getGender()
    {
        return self::GENDER;
    }
    public static function getEyeColor()
    {
        // return $this-eyeColor;// Sai.static khong dung doi tuong de truy cap ma phai dung class
        return self::$eyeColor; //tu khoa self giong nhu tuong duong $this, nhung no chi duoc dung cho static
    }
    public static function eating()
    {
        // vi method nay la staic nen khong ton tai doi tuong $this
        // $dog = new Animals();
        // return $dog->food; hoac viet nhu ben duoi danh cho master-> ngan gon hon
        return (new Animals())->food;
    }
}
$cat = new Animals();
// echo $cat->name;//khong dung doi tuong cua class de truy cap vao thuoc tinh duoi dang static
//truy cap vao thuoc tinh static ben ngoai class, thi dung truc tiep class de truy cap
$nameCat = Animals::$name;
// echo $nameCat;
$food = Animals::eating();
echo $food;
//static giam thieu viec khoi tao lai doi tuong day. khong phu thuoc vao doi tuong class
// 1 class cp the tao ra nhieu doi tuong khac nhau nen dung static de???, moi class khong cho phep tao nhieu hon 1 doi tuong de de quan ly
//thong thuong cac thuoc tinh de private
//nguoi ta dung tu khoa const dung trong class, khong dung define.
//dac biet voi tu khoa const thi phai dung tu khoa self de trieu goi trong class du khong co static
