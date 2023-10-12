<?php

echo "hi you";
//localhost/lesson01/  mặc đinh chạy file index.php nếu có tồn tại 
echo "<br/>";

/**
 * cú pháp comment trên nhiều dòng
 * comment: trìh thông dịch sẽ bỏ qua các đoạn code này và không thực thi
 * 
 * 
 * khái nệm biến trong PHP
 * 
 * biến là nơi lưu trữ giá trị, máy tính cấp phát vùng nhớ để lưu trữ nó(giá trị)
 * 
 * một số các ký thuật('cú  pháp) khai báo một biến trong php
 * một biến trong php luôn bắt đầu bằng 1 ký tự $
 * tên biến trong php không bắt đầu bằng con số hay là khoảng trắng 
 */
$myName = 'teo'; //đây là một biến hợp lệ trong php 

//$1myAge = 20;đây là biến không hợp lệ 
//$ myEmail = 'teao@gmail.com'; //bien không hợp lệ vì có khoảng trắng

$_myAddress = 'Ha noi';

// trong ngôn ngữ lập trình php, không quy định sẵn kiểu dự  liệu cho biến, nó khác hoàn toàn so với kiểu static typing kiểu dữ liệu cho biến sẽ được tự động nhân khi biến đó được gán cho một gái trị cụ thể 
//biến trong php sẽ phân biệt chữ hoa và chữ thường

$myLove = 'A';//camelcase
$MyLove = 'A'; // biến như này không nên khai báo vì không theo chuẩn camelcasse  
//đây là 2 biến khác nhau hoàn toàn 
//khai báo tên biến phải có ý nghĩa và tường minh dễ hiểu 

//hằng số trong php
//quy tắc đặt hằng số: viết hoa và cách nhau bằng dấu gạch dưới 
CONST PI= 3.14;
define('MY_PI',3.14); //hằng số

//PI = 3.15 //điều này là sai vì khong được thay đổi lại giá trị
echo PI;
