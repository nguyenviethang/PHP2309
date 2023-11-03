<?php
//van phai khoi dong session vi hai cai trang session01 va session02 doc lap voi nhau
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//lay gia tri session da duoc tao ra o file session01
$user = $_SESSION['username'] ?? '';
$email = $_SESSION['email'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session PHP</title>
</head>

<body>
    <h3>session</h3>
    <p>username: <?= $user; ?></p>
    <p>email: <?= $email; ?></p>
    <a href="session03.php">Remove session</a>
    <br/>
    <a href="session01.php">Session01.php</a>
</body>

</html>