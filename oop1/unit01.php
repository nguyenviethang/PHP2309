<?php
//dinh nghia class
class Student
{
    //thuoc tinh cua doi tuong (property)--> mo ta tinh chat dac diem, trang thai cua doi tuong - thong thuong se dung cac danh tu hay tinh tu de diem dat 
    public $id = "0010233";
    public $name = "Teo";
    private $score = 1; // private chi duoc hoat dong noi bo trong class tuc la chi hoat dong trong scope {} cua class
    protected $document = "PHP"; // chi cho phep noi bo trong class tuong tu private , va nhung thang ke thua duoc dung.
    //hanh dong, hanh vi cua doi tuong(thong thuong dung cac dong tu de mo ta--> goi la cac phuong thuc(method))
    public function goToSchool()
    {
        return "HNUE";
    }
    function Test()
    {
        return "PHP OOP";
    }
    public function getDocument()
    {
        var_dump($this);
        return $this->document;
    }
}
//tao ra doi tuong thuoc class
$svcntt = new Student();
$svck = new Student();
//truy cap vao thuoc tinh hay la phuong thuc doi tuong trong class
$idStudent = $svcntt->id;
$testName = $svck->Test(); //() chay phuong thuc
echo "{$idStudent} --- {$testName}";

// $myScore = $svcntt->score;//Sai. vi thuoc tinh score la private
// echo $myScore;
// $myDoc = $svck->document; //SAi. vi thuoc tinh document la protected
// echo $myDoc;
//neu khong khai bao gi thi phuong thuc hay hay doi thuong do tu dong nhan la public trpng class
$doc = $svck->getDocument();
echo $doc;//obiect
