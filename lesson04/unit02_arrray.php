<?php
//kien thuc ve mang trong php
$number = 10; // chi luu duoc 1 gia tri tai thoi diem ma no khai bao
// muon 1 bien don co the luu tru duoc nhieu gia tri khac nhau ??? ==> dung Array(mang)
//mang la 1 bien don co the luu tru nhieu gia tri khac nhau 
$arrNumber = [1,2,3,4,5,6,7,8,9,10,11];//mang luu duoc nhieu con so nguyen khac nhau
$arrNumber2 = array(1,2,3,4,5,6,7);// dung cho moi phien ban php

//cac phan tu trong 1 mang khong nhat thiet phai cung kieu du lieu voi nhau
$arrNumber3 = [1, true, "Apple",3,4];// khong nhay thiet cac phan tu trong mang dong nhat kieu du lieu voi nhau
//1 - vai khai niem quan trong;
// gia tri cua phan tu nam trong mang(value)
// vi tri cua phan tu nam trong mang(index, key)
// vi tri cua phan tu dau tien trong mang luon luon duoc danh la so 0(khong co vi tri am o trong mang)
//truy cap vao mot phan tu nam trong mang
//cu phap: ArrayName[index];
$apple = $arrNumber3[0];
echo $apple;
//in mang
echo "<pre>"; //in dang cay thu muc, ==> dep hon
print_r($arrNumber3);// in mang khac voi duyet mang
echo "</pre>";
echo "<br/>";
echo $arrNumber[7];
$arrMyNumber = [1,2,3,4,5,6,7,8,9,10,11];
//mang tuan tu: la mang ma vi tri cua cac phan tu duoc tu dong tao va sep sep tang dan la cac con so
$arrInfoStudent = [
    "name" => "Van teo",
    "age" => 20,
    "gender" => "male",
    "address" => "Ha Noi",
    "email" => "teo@example.com"

];//mang ket hop 
echo "<br/>";
echo "<pre>";
print_r($arrInfoStudent);
echo "<br/>";
$email = $arrInfoStudent["email"];
echo $email;
$arrStudents = [
    ["name" => "teo", "age" => 20],
    ["name" => "teo", "age" => 20],
    ["name" => "teo", "age" => 20],
    10,
    20,
    true, 
    "apple"
];
echo "<pre>";
print_r($arrStudents);




