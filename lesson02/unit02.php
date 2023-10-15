<?php
// các phép toán cơ bản trong php
// +, -, /, *, %, : toán học
// = gán giá trị
// so sánh về mặt giá trị
// === so sánh về mặt giá trị và kiểu dữ liệu
// ! phép phủ định
// % phép chia lấy phần dư.
//ví dụ: 10%6 = 4
// x += y <=> x = x + y
// x -= y <=> x = x - y
// x *= y <=> x = x * y
// x /= y <=> x = x / y 
// short syntax

$a = 10;
$b = 20;
$a += $b; // $a = $a + $b = 10 + 20 = 30
// echo "<br/>";
echo $a;
// $i++ hoặc ++$i // phép tăng 1 đơn vị
// $i-- hoặc --$i // phép giảm 1 đơn vị
$n = 10;
$m = 11;
$n != $m; // n không bằng m
//++$n; // tăng trước ngay một đơn vị
echo "<br/>";
echo  $n;
//$m++;// tăng sau 1 đơn vị
echo "<br/>";
echo $m;
echo "<br/>";
$k = (++$m) + ($n++) + (--$n); //
//     12   +  10   +    10 = 32 
echo "<br/>";
echo $k;



// <, > , >=, <=
// &&, || , AND, OR : toán tử logic
// phép $$ trả về true khi mọi điều kiện đúng
// phép || trả về true khi chỉ cần 1 trong các điều kiện là đúng
