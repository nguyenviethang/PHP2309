<?php
//string
//chuoi: bao gom chu cai con so va cac ki tu dac biet nam trong nhay don hoac nhay kep
// kieu du lieu: string
$myString = "dang hoc php";
$myString2 = "dang hoc php 2";
var_dump($myString, $myString2);
//trong php, toan tu "." ghep chuoi(noi chuoi)
echo "<br/>";
echo $myString . $myString2; // ghep hai chuoi lam 1
// khi nao nen dung nhay don va khi nao dung nhay kep
echo "<br/>";
$age = 20;
$myString3 = "Nam nay toi {$age} tuoi";
$myString4 = 'Nam nay toi {$age}';
echo $myString3;
echo "<br/>";
echo $myString4;
//su khac biet lon nhat giua nhay don va nhay kep trong php ve chuoi: nhay kep cho phep su dung bien trong chuoi, con nhay don thi khong?
$myString5 = "hoc \"PHP\" co ban"; // khi dung nhay kep trong nhay kep hay nhay don trong nhay don thi phai them dau "\" truoc dau nhay trong string
echo "<br/>";
echo $myString5;
$myString7 = 'Hoc \'php\' co ban';
$myString8 = "hoc 'PHP' co ban";
$myString9 = 'hoc "PHP" co ban ';
echo "<br/>";
// cac ham co sawn lam viec voi chuoi trong php//
//vi du 1 - get string length
$countLength = strlen($myString8);
echo $countLength;
echo "<br/>";
echo strtoupper($myString9);
echo "<br/>";
echo strtolower($myString7);
echo "<br/>";
echo ltrim($myString8); // xoa khoang trang mac dinh ben trai
echo "<br/>";
echo ltrim($myString8, "h"); //xoa ki tu dau tien ben trai
echo "<br/>";
echo $myString8;
echo "<br/>";
$md5Str = md5($myString8); //
echo $md5Str;
// cac ham lam viec voi string trong php thi khong truc tiep lam thay doi chuoi ban dau, ma luon luon tra ve mot chuoi moi
echo "<br/>";
echo strip_tags($myStr, "<i></i>");
$myStr = "<h1><i>Hoc php co ban</i></h1>"; // php ho tro viec hien thi HTML ra ngoai trinh duyet
echo $myStr;
$myString9 = "hoc php co ban";
$findPosition = strpos($myString9, "php");
var_dump($findPosition);
echo "<br/>";
if ($findPosition === false) {
    var_dump($findPosition);
}
//!= : sa sanh khong bang ve mat gia tri
// !== : so sanh khong bang ve mat gia tri va kieu du lieu
