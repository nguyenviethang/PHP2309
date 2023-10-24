<?php
//declare function

function testCL($n) {
    //return $n % 2 ==0;
    if ($n % 2 ==0){
        return true;
    }
    return false;
}
//lambda function anonymous function
$sumHS = function($a, $b) {
    return $a + $b;
};
echo $sumHS(1, 2);// ten ham la 1 bien
echo "<br/>";


$number = 10; // bien global
function phuongtrinhbacnhat($a, $b) {
    global $number;// su dung bien global o ben ngoai ham(luu y: khai bao dau tien nhat trong ham va co tu khoa global dung truoc )
    $number2 = 9;// bien cuc bo(chi hoat dong noi bo trong ham thoi)
    return (-$b/$a) + $number + $number2;
    // ban than tat ca nhung dong lenh nay nam trong body function: se hieu la ow dang cuc bo - no chi hoat dong trong pham vi cua ham
}

$n = 100;
$tongbaso = function ($a, $b, $c) {
    global $n;
    return $a + $b + $c +$n;
};
echo "<br/>";
// var_dump($tongbaso(1,2,3));

$tongbonso = function ($x, $y, $z, $d) use ($n) {
    return $x + $y + $z + $d + $n;
};
echo "<br/>";
var_dump($tongbaso(1,2,3));
echo "<br/>";
var_dump($tongbonso(1,2,3,4));

//tham chieu va tham tri trong function PHP  
// 1 tham tri: tham so truyen ham, khong bi thay doi theo logic trong khi di ra khoi ham
// 2 - tham chieu(.tham bien): tham so truyen vao ham bi thay doi theo logic o trong ham khi di ra khoi ham

$test = 10;
function thamTri(&$test){ // tham chieu ==> &$test
    $test += 100;
    echo $test;
    echo "<br/>";
}
echo "truoc khi truyen vao ham: {$test}";
echo "<br/>";
thamTri($test);
echo "sau khi truyen vao ham: la: {$test}";
echo "<br/>";

//tu khoa static trong function
function demoKeywordStatic(){
    static $count = 0;
    $count++;
    echo "value{$count}";
    echo "<br/>";
}
demoKeywordStatic();//1
demoKeywordStatic();//2
demoKeywordStatic();//3
//tu khoa static giup luu lai gia tri cua bien trong ham sau moi lan goi ham ra su dung



