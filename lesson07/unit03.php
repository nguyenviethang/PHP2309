<?php
if(isset($_COOKIE['T3H-cookie'])){
    unset($_COOKIE['T3H-cookie']);
    setcookie("T3H_cookie","",time()-3600,"/","",0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoa cookie</title>
</head>
<body>
    <h3>Xoa cookie</h3>
    <a href="unit02.php">unit 02 (lay gia tri cookie)</a>
</body>
</html>