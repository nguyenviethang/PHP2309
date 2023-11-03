<?php
//nhan lap gia tri cookie da duoc thiet lap
//su dung supper global $_COOKIE
//$_COOKIE cung chi la mot bien kieu mang
$myCookie = $_COOKIE['T3H_cookie'] ?? '';
//kieu mang dung rat nhieu trong php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <h3>gia tri cookie la: <?= $myCookie; ?> </h3>
    <a href="unit01.php">unit01.php</a>
    <br/>
    <a href="unit03.php">unit03-xoa cookie</a>
</body>

</html>