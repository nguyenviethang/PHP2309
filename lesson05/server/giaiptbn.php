<?php
function giaiPTBN()
{
    if (isset($_POST["btnGiaiPT"])) {
        //kiem tra xem nguoi dung da bam button giai pt chua?
        $hsa = $_POST["hsa"] ?? null;
        $hsb = $_POST["hsb"] ?? null;
        // echo "{$hsa} --- {$hsb}";
        if (empty($hsa) || empty($hsb)) {
            //nguoi dung khong nhap du lieu theo yeu cau
            //dieu huong trang bang header();
            header("Location:../ptbn.php?state=error");
        } else {
            //nguoi dung da nhap dung va du du lieu
            //thuc su nguoi dung nhap vao co phau la so khong?
            $hsa = is_numeric($hsa) ? $hsa : null;
            $hsb = is_numeric($hsb) ? $hsb : null;
            if (is_null($hsa) || is_null($hsb)) {
                //nguoi dung nhap khong phai la so
                header("Location:../ptbn.php?state=fail");
            } else {
                //nguoi dung nhap dung la so
                if ($hsa === "0") { //vi dung ra $hsa la chuoi khi gui du lieu qua form, form tra ve dang string
                    header("Location:../ptbn.php?state=false");
                } else {
                    $x = (-$hsb) / $hsa;
                    header("Location:../ptbn.php?state=success&result={$x}");
                }
            }
        }
    }
}
giaiPTBN();
// cac du lieu gui len tu form chi chua string he so