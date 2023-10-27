<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $state = $_GET["state"] ?? null;
    $result = $_GET["result"] ?? null;
    
    ?>
    <h4>giai ptbn</h4>

    <?php if ($state === 'error') : ?>
        <p style="color:red"> vui long nhap he so</p>
    <?php endif; ?>

    <?php if ($state === 'fail') : ?>
        <p style="color:red"> vui long nhap so</p>
    <?php endif; ?>

    <form action="server/giaiptbn.php" method="post">
        <div>
            <label for="hsa">he so a</label>
            <input type="text" id="hsa" name="hsa" value="<?= $hsa; ?>"/><!--bat buoc phai co thuoc tinh name -->
        </div>
        <br />
        <div>
            <label for="hsb">he so b</label>
            <input type="text" id="hsb" name="hsb" value="<?= $hsb; ?>"/><!--bat buoc phai co thuoc tinh name -->
        </div>
        <br />
        <button type="submit" name="btnGiaiPT">giai phuong trinh bac nhat</button>
        <?php if($state === 'success'): ?>
            <div>
                <p>nghiem la: <input type="text" value="<?= $result; ?>" disabled></p>
            </div>
        <?php endif; ?>
    </form>
</body>

</html>