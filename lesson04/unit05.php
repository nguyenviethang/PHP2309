<?php
$rooms = [
    ["id" => 101, "name" => "phong to chuc"],
    ["id" => 102, "name" => "phong ke toan"],
    ["id" => 103, "name" => "phong IT"],
];
$staffs = [
    ["id" => 1, "room_id" => "101", "name" => "van teo", "age" => 24, "money" => 100],
    ["id" => 2, "room_id" => "101", "name" => "van ty", "age" => 21, "money" => 120],
    ["id" => 3, "room_id" => "102", "name" => "van hoi", "age" => 20, "money" => 130],
    ["id" => 4, "room_id" => "103", "name" => "van hoi", "age" => 19, "money" => 180]
];

//xu li lay them thong tin ten phong ban do vao du lieu cua mang nhan vien thong qua ma phong ban tuong ung cua tung nhan vien


foreach ($staffs as $key => $item) {
    foreach ($rooms as $index => $value) {
        if ($item["room_id"] == $value["id"]) {
            //lay them du lieu o ben mang room do sang mang staff
            $staffs[$key]["name_room"] = $value["name"];
        }
    }
}
echo "<pre>";
print_r($staffs);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>danh sach nhan vien</h2>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>ma nhan vien</th>
                <th>name</th>
                <th>phong ban</th>
                <th>tuoi</th>
                <th>luong</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staffs as $key => $item) : ?>
                <tr>
                    <td><?= $item["id"]; ?></td>
                    <td><?= $item["name"]; ?></td>
                    <td><?= $item["name_room"]; ?></td>
                    <td><?= $item["age"]; ?></td>
                    <td><?= $item["money"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</body>

</html>