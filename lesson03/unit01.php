<?php
//2- while vong lap kiem tra dieu kien truoc, dieu kien truyen vao vong laj while neu ma no dung thi moi thuc thi cac vong lap va nguoc lai
// so lan lap cua vong lap while 0 -> den vo cung
$j = 1;
while ($j < 10) {
    echo $j; // in ra ket qua 1 - > 0
    echo  "<br/>";
    $j++;
}
// su dung vong lap while:  tinh tong cac so chan tu 1 den 10
$k = 1;
$sum = 0;
while ($k <= 10) {
    if ($k % 2 == 0) {
        $sum += $k;
    }
    $k++;
}
echo "<br/>";
echo $sum;
//3 - vong lap do..while: vong lap kiem tra dieu kien sau. vong lap se luon luon thuc thi it nhat 1 vong lap bat ke dieu kien truyen vao vong lap la sai hay dung.
//so vong lap chay: 1--> vo cung

$v = 1;
do {
    echo $v; // in tu 1 -> 9
    echo "<br/>";
    $v++;
} while ($v < 10);

//tinh tong binh phuong cac so le tu 1 den 10
$n = 1;
$total = 0;
while ($n <= 10) {
    if ($n % 2 != 0) {
        $total += $n * $n;
        //$total += pow( $n, 2);
    }
    $n++;
}
echo "<br/>";
echo $total;
