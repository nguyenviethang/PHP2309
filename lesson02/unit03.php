<?php
// các cấu trúc điều kiện và các vòng lặp trong php
//1 : if 
//2 : if..else
//3 : if...elseif 

$month = 11;
if ($month == 10) {
    // == : toán tử so sánh (chỉ so sánh về mặt giá trị)
    // $month == 10 : biểu thức, có thể sai hoặc đúng. Nếu đúng thì sẽ thực thi các lệnh trong mệnh đề if và ngược lại
    echo "OK";
}
echo "<br/>";
// if : từ khóa trong lập trình
// (): khai báo biểu thức điều kiện
// {: start block (bắt đầu một khối lệnh)
//  }: kết thưc một khối lệnh
// nội dung bên trong của cặp thẻ mở và đóng gọi là body content

if ($month == 12) {
    echo "ok";
} else {
    echo  'don\'t OK';
}
echo "<br/>";

if ($month == 8) {
    //do something
} elseif ($month == 9) {
    //do something
} elseif ($month == 10) {
    //do something
} elseif ($month == 11) {
    // do something
}

//switch .. case 
switch ($month) {
    case 1: // chỉ hiểu là so sánh bằng
        // do something
        break; // thoát khỏi case đang quản lý của switch
    case 2:
        // do something
        break;
    default:
        // do something
        break;
}
//  switch case dùng so sánh bằng trong khi if elseif so sánh với mọi điều kiện. nói đơn giản, switch case là 1 trường hợp nhỏ của trường hợp if elseif

echo "<br/>";
$checking = false;
if ($checking == 0) {
    echo "yes";
} else {
    echo "No";
}
// value 1 == true nó sẽ gán ngay giá trị BỎ qua KIỂU DỮ LIỆU và tương tự với value 0 == false , value  chuỗng rỗng === false == 0

$n = 10;
$m = "9";
$k = $n + $m;

//$m : kiểu dữ liệu string
//$m: giá trị kiểu nó là number string(trong chuỗi đó chỉ có dạng số)
echo "<br/>";
// echo $k;
var_dump($k);
//echo: là keyword
//var_dump: nó là hàm hiện thị được kiết quả và hiện thị kiểu dữ liệu của kết quả(return)

/*********************************************************VÒNG LẶP **************************************/

// for ($i = 0; $i <= 9; ++$i) {
//     echo $i; // in lần lượt tất cả các số từ không đến 9
//     echo "<br/>";

// }
echo "<br/>";

for ($i = 1; $i <= 10; $i++) {

    if ($i % 2 == 0) {
        echo $i; // in l
        echo "<br/>";
    }
}
