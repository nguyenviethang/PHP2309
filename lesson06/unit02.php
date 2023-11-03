<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>upload multifile</h3>
    <form method="post" enctype="multipart/form-data" action="server/uploadMultiFile.php">
        <label for="">upload file</label>
        <input type="file" name="file[]" multiple>
        <br />
        <button type="submit" name="btnUpload">Upload</button>
    </form>
</body>

</html>