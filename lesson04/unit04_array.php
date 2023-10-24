<?php

$listStudent = [
    ["id" => 113, "name" => "teo", "age" => 20, "money" => 2000 , "gender" => 1],
    ["id" => 114, "name" => "mui", "age" => 21, "money" => 3000 , "gender" => 0],
    ["id" => 115, "name" => "ty", "age" => 23, "money" => 4000  , "gender" => 1],
    ["id" => 116, "name" => "hang", "age" => 24, "money" => 5000, "gender" => 0]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listStudents</title>
    <style>
        .chan{
            background-color: yellow;
            ;
        }
        .le{
            background-color: pink;
        }
    </style>
</head>

<body>
    <h3>danh sach sinh vien</h3>
    <table class="" width="100%" border="1" cellspacing="1">
        <tr>
            <th>Ma SV</th>
            <th>HO Ten</th>
            <th>Tuoi</th>
            <th>hoc bong</th>
            <th>gioi tinh</th>
        </tr>
        </thead>
        <tbody>
            <?php $sumMoney = 0; ?>
            <?php foreach ($listStudent as $key => $item) : ?>
                <?php $sumMoney += $item['money']; ?>
                <tr class="<?= $key % 2 == 0 ? 'chan':'le'; ?>"> 
                    <td><?= $item["id"]; ?></td>
                    <td><?= $item["name"]; ?></td>
                    <td><?= $item["age"]; ?></td>
                    <td><?= $item["money"]; ?></td>
                    <td><?= $item["gender"] == 1 ?  'nam' : 'nu' ; ?></td>
/***brower khong hien thi duoc ma php, chi hien thi duoc html, css, js == day la co che server side redering */
                </tr>

            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan=3>tong tin hoc bong</td>
                <td ></td><?= $sumMoney; ?></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>

<?php
//condition ? a :body
//condition is true = > a 
//condition is false = >body
$x = 10;
$y = 20;
$z = ($x - $y > $y - $x) ? $x : $y;
echo $z;