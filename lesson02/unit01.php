<?php
$number = 10; // biến này có kiểu dữ liệu là số nguyên
var_dump($number);
//2 - kiểu float - double (kiểu số thực real number)
$number2 = 10.101;
echo "<br/>";
var_dump($number2);
echo "<br/>";
//3 - kiểu dữ liệu boolean (kiểu dữ liệu logic)
$checking = true;
$checking2 = false;
var_dump($checking);
echo "<br/>";
var_dump($checking2);

//4 - null
// biến đó được khai báo nhưng chưa hề được cấp phát bộ nhớ đẻ lưu trữ dự liệu
//khi biến được khái báo null thì chowng trình máy tính sẽ tự động hiểu là biến đó chưa tồn tại và chưa được cấp phát bộ nhớ(lý thuyết lõi giấy vệ sinh)
 $test = null;
 $test2 = "";
 $test = '';
 $test = 100;
 $test3 = null;
 // $test3; không định nghĩa cho biến như thế này trong php
 // luôn luôn gán giá trị cho biến để nó nhận kiểu dữ liệu
 echo "<br/>";
var_dump($test);
/*************************************************************** */
