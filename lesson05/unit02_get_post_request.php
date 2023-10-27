<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="unit01.php?id=10&name=thangnv&age=20">send data to unit01.php</a>
    <br/><br/>
    <h4>method GET</h4>
    <form method="get" action="unit01.php">
        <input type="text" name="username" placeholder="username">
        <br/> <br/>
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="btnSend">Send data</button>
    </form>
    <br/><br/>

    <h4>method POST</h4>
    <form method="post" action="unit01.php">
        <input type="text" name="username" placeholder="username">
        <br/> <br/>
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="btnSend">Send data</button>
    </form>

    <h4>method REQUEST</h4>
    <form method="request" action="unit01.php">
        <input type="text" name="username" placeholder="username">
        <br/> <br/>
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="btnSend">Send data</button>
    </form>
</body>
</html>