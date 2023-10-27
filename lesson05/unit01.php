<?php
//phuong thuc gui du lieu trong php(send data) co ban trong php
//phuong thuc get va post
//get 
//1 -GET
//$_GET; //super global - bien kieu mang

//method GEt se duoc truyen tai du lieu thong quaurl cua trinh duyet abc.com?id=1&name=thangnv
//? & : dau hieu nhan biet cua method GET
//id va name goi la key(index) cua $_GET
//$_GET["id"] va $_GET["name"];
/****************************************************** */
//nhan cac du lieu tu unit02.php gui len
//vi unit02 gui du lieu len bang method get(hien thi bang url) nen dung bien $_GET de lay gia tri ve
$id = $_GET["id"] ?? null; // isset($_GET["id"]) ? $_GET["id"] : null; //
$name = $_GET["name"] ?? null; //isset($_GET["name"]) ? $_GET["name"] : null;
$age = $_GET["age"] ?? null;
echo "id = {$id}, name = {$name}, age = {$age}";    
echo "<br/>";
/********* */
//nhan du lieu tu form gui len bang method get
$username = $_GET["username"] ?? null;
$password = $_GET["password"]?? null;
echo "username = {$username}, password = {$password}";
echo "<br/>";

//uu diem method get la gui du lieu nhanh nhuwng thong tin de bi lo
/************************************************************************************************************** */
//ben phia form cua unit02 dung method post de gui data len
//thi ben phia unit01 muon nhan duoc data thi dung $_POST
//$_POST: supper global - bien kieu mang
//key hay index cua $post chinh la gia tri cua cac thuoc tinh name cua cac phan tu trong form HTML
//method post: khong hien thi du lieu tren url
$id = $_POST["id"] ?? null; // isset($_GET["id"]) ? $_GET["id"] : null; //
$name = $_POST["name"] ?? null; //isset($_GET["name"]) ? $_GET["name"] : null;
$age = $_POST["age"] ?? null;
echo "id = {$id}, name = {$name}, age = {$age}";    
echo "<br/>";

$user = $_POST["username"] ?? null; 
$user = $_POST["password"] ?? null; 
echo "user = {$username}, pass = {$password}";
echo "<br/>";

//trong thuc te th thuong dung method post, chi dung method get khi dung the a trong html



// $_request dung khi khong biet ro la dung phuong thuc nao(post/get), nhuoc diem la $_request cham truyen tai du lieu
$id = $_REQUEST["id"] ?? null; // isset($_GET["id"]) ? $_GET["id"] : null; //
$name = $_REQUEST["name"] ?? null; //isset($_GET["name"]) ? $_GET["name"] : null;
$age = $_REQUEST["age"] ?? null;
echo "id = {$id}, name = {$name}, age = {$age}";    
echo "<br/>";

$user = $_REQUEST["username"] ?? null; 
$user = $_REQUEST["password"] ?? null; 
echo "user = {$username}, pass = {$password}";