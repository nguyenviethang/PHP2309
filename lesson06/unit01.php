<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $state = trim($_GET['state'] ?? null);
    $nameFile = trim($_GET['name'] ?? null);
    define('UPLOAD_PATH', "server/uploads/");
    ?>
    <h3>upload</h3>
    <?php if ($state === 'error') : ?>
        <p style="color:red">vui long chon file</p>
    <?php endif; ?>

    <?php if ($state === 'type_file_error') : ?>
        <p style="color:red">dinh dang file khong dung, chi cho phep dinh dang file png, jpeg, jpg</p>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" action="server/upload.php">
        <label for="">upload file</label>
        <input type="file" name="file">
        <br />
        <button type="submit" name="btnUpload">Upload</button>
    </form>
    <?php if ($state === 'ok' && !empty($nameFile)) : ?>
        <img src="<?= UPLOAD_PATH . $nameFile ?>" />
    <?php endif ?>
</body>

</html>