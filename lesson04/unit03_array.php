<?php
$arrNumber = [1, 2, 3, 4, [5, 6, 7], 8];
//dem so luong phan tu cua mang
$count = count($arrNumber);
echo $count; // dem phan tu cua mang thi se dem bat dau tu 1
echo "<br/>";
echo $arrNumber[4][2]; // mang da chieu==> tim so 7 trong mang da chieu
echo $arrNumber[4][1]; // mang da chieu==> tim so 5 trong mang da chieu

$arrInfoStudent = [
    [
        "name" => "Van teo",
        "age" => 20,
        "gender" => "male",
        "info" => [
            "address" => "nghe an",
            "email" => "ty@gmail.com",
        ]

    ],
    [
        "name" => "Van ty",
        "age" => 21,
        "gender" => "male",
        "info" =>
        [
            "address" => "ha noi",
            "email" => "ttt@gmail.com",
        ]

    ]


];
echo "<pre>";
print_r($arrInfoStudent[1]["info"]["address"]);// dat lien tiep cac key==> no giong kieu dia chi nha tu ngoai vao trong
// duyet qua phan tu nam trong mang
//1 dung vong lap for thuong
$arrNumber2 = [1,2,3,4,5,6,7,8,9];
$count2 = count($arrNumber2);
for($i = 0; $i < $count2; $i++)//$i la cac index, la vi tri dau cau mang,, luu y: vi tri dem la 1 va thu tu dem la 0 ==> $count= 9 luon lon hon $i=8 --> $i < $count va dieu nay la duong nhien
{
    echo $arrNumber2[$i];
    echo "<br/>";
}

//2 - foreach 
foreach($arrNumber2 as $key  => $value ){// quan tam index thif viet them key
    echo "value: {$value}";
    echo "<br/>";
}
foreach($arrNumber2 as $value ){// neu bai toan khong quan tam den key thi khong cam viet key de performent tot hon 
    echo "value: {$value}";
    echo "<br/>";
}

//dung for thuong duyet qua  ngam thay doi gia tri cua no so voi ban dau, tom lai la muon tac dong den mang thi nen dung for thuong ==> khong co for nao la giong nhau vi no phu thuoc tung hoan canh bai toan  
// dung foreach dung de view thoi 
//su khac biet chi thay khi so luong phan tu mang rat lon(vai trieu)

$listStudent = [
    ["id" => 113, "name" => "teo", "age" => 20],
    ["id" => 114, "name" => "mui", "age" => 21],
    ["id" => 115, "name" => "ty", "age" => 23]
];
foreach($listStudent as $key => $value){
    //key = 0 1 2
    //value: 3 mang con
    echo $value["id"] . $value["name"] . $value["age"];
    echo "<br/>";

}
//kiem thuc ve array rat rat quan trong, nho hoc ki
