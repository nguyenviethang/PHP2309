<?php
// dinh nghia ham trong php 
// ham: tap hop cac lenh de giai quyet mot van de
// giup cho chuong trinh tuong minh, de bao tri, nang cap, kiem soat ung dung
function sumNumber($a, $b)
{
    return $a + $b;
    // echo "myFunction";// se khong hien thi
}
// function: khia bao ham
//sumNumber: ten ham do ltv tu dinh nghia
//() : cu phap de truyen tham so tu ham neu co - giup thuc thi ham khi goi ra su dung

// {}: start block bat dau noi dung cua ham
// tat ca ma lenh nam trong start block va end block - body function
// return: tra ket ket qua ve cho ham neu can(khong bat buoc phai co)
//$a, $b: tham so truyen vao ham(khong bat buoc luc nao cung phai co)
//GOI HAM RA SKU DUNG
$sum = sumNumber(1, 2); // 1, 2 la tham so that: tham so co thuc suj y nghia ve mat gia tri
// echo $sum;

// tu khoa return: giup thoat luon khoi ham bkhi gap tu khoa nay, cac lenh ben duoi trong ham se khong dc thuc thi
//tu khoa break
for ($i = 1; $i < 10; $i++) {
    if ($i < 6) {
        echo $i; // ? 12345
        //break; // thoat ngay vong lap, co cong dung nhuw tu khoa return ==> in ra 1
        //break;
        continue; // tiep tuc thuc thi vong lenh day

    }
    echo "<br/>";
    echo "i {$i}"; //6789
}
// viet ham tinh tong cac so tu 1 den n
// function sum($n)
// {
//     return (($n + 1) * $n) / 2;
// }
// $result = sum($n);
// $n = 10;
// echo $result;

// viet ham kiem tra 1 so co phai so nguyen to khong
// function test($m)
// {
//     if ($m < 0) {
//         return "khong phai so nguyen to";
//     } elseif ($m >= 0) {
//         if ($m % 1 == $m && $m % $m == 1) {
//             return "so nguyen to";
//         }else {
//             echo " khong phai la so nguyen to";
//         }
//     }
// }
// $res = test($m);
// $m = 10;
// echo "<br/>";
// echo $res;


// thay lam

function test($n)
{
    if ($n <= 1) {
        return false;
    }
    if ($n == 2) {
        return true;
    }
    $count = sqrt($n);
    for ($i = 2; $i <= $count; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$checking = test(7);
if ($checking) {
    echo "so nguyen to";
} else {
    echo " khong phai la so nguyen to";
}
// tinh trung binh cong ac so nguyen to tu 1 den 30
// can co 1 ham kiem tra so nguyen to
// b2, can co 1 ham tinh tong cac so nguyen to
// b3, can co 1 ham dem so luong cac so nguyen to
// tinh TB - buoc 2 va buoc 3 bo tro

function sumNT($i = 1, $j = 30)
{
    $sum = 0;
    for ($k = $i; $k <= $j; $k++) {
        if (test($k)) {
            $sum += $k;
        }
    }
    return $sum;
}

function totalNT($i = 1, $j = 30)
{
    $total = 0;
    for ($k = $i; $k <= $j; $k++) {
        if (test($k)) {
            $total++;
        }
    }
    return $total;
}

function averageNT($i = 1, $j = 30)
{
    return sumNT($i, $j) / totalNT($i, $j);
}
$res = averageNT(1, 5);
echo "<br/>";
echo $res;
