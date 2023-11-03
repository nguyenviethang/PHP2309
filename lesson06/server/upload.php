<?php
//dinh nghia hang so chi ra duong dan luu file.
define("UPLOAD_PATH", "uploads/");

function checkTypeFile($styleFile = '')
{
    $allowType = ['image/png', 'image/jpeg', 'image/jpg'];
    //in_array: kiem tra 1 phan tu co nam trong mang hay khum
    return in_array($styleFile, $allowType);
}
function myUploadFile()
{
    if (isset($_POST['btnUpload'])) {
        if (!empty($_FILES['file']['name'])) {
            //$_file: supper global, bien kieu mang
            //chua toan bo thong tin du lieu cua file khi nguoi dung upload len server
            //ten file
            $nameFile = $_FILES['file']['name'];
            //noi luu tru tam thoi cua file
            $tmpName = $_FILES['file']['tmp_name'];
            //kiem tra loi cua file
            $errorFile = $_FILES['file']['error'];

            if (!empty($tmpName) && $errorFile == 0) {

                //khong co loi tu file cua nguoi dung
                $uploadFile = UPLOAD_PATH . basename($nameFile);
                //kiem tra file uplaod co dung la anh hay khong
                if (checkTypeFile($_FILES['file'])) {

                    if (move_uploaded_file($tmpName, $uploadFile)) {
                        header("Location:../unit01.php?state=ok&name={$nameFile}");
                    } else {
                        header("Location:../unit01.php?state=upload_fail");
                    }
                } else {
                    header("Location:../unit01.php?state=type_file_error");
                }
            } else {

                //co loi, khong cho upload
                header("Location:../unit01.php?state=fail");
            }
        } else {

            //bao loi nguoi dung chua chon file de upload
            header("Location:../unit01.php?state=error");
        }
    }
}
myUploadFile();
