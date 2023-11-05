<?php
function registerAccount()
{
    if (isset($_POST['btnRegister'])) {
        $username = trim($_POST['username'] ?? null);
        $username = strip_tags($username);

        $password = trim($_POST['password'] ?? null);
        $password = strip_tags($password);

        $email = trim($_POST['email'] ?? null);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : null;

        $phone = trim($_POST['phone'] ?? null);
        $phone = (is_numeric($phone) && strlen($phone) == 10) ? $phone : null;

        if (empty($username)) {
            header('Location:../register.php?state=error_username');
            exit();
        }
        if (empty($password)) {
            header('Location:../register.php?state=error_password');
            exit();
        }
        //ghi du lieu vao trong file - file nay da ton tai san tren server
        $fopen = fopen('database.txt', 'a+'); //append
        if ($fopen) {
            $data = $username . '---' . $password . '|||';
            $dataFile = file_get_contents('database.txt'); //fread khi dung thi phai co du lieu trong file==> khong toi uu, vay nen dung file_getcontent se tot hon, nhung file_get_content co toc do file cham hon nhieu, performent khong tot bang fred
            $dataFile = rtrim($dataFile, '|||');
            $arrUsers = explode('|||', $dataFile);
            $arrUsername = [];
            foreach ($arrUsers as $key => $user) {
                $arrInfo = explode('---', $user);
                $arrUsername[$key] = $arrInfo[0];
            }

            $checkUser = false;
            if (in_array($username, $arrUsername)) {
                $checkUser = true;
            }

            if (!$checkUser) {
                $write = fwrite($fopen, $data);
                fclose($fopen); // dong file==> fopen het hieu luc
                if ($write) {
                    header('Location:../login.php');
                } else {
                    header('Location:../register.php?state=error_write_file');
                }
            } else {
                header('Location:../register.php?state=error_exits_user');
            }
        } else {
            header('Location:../register.php?state=error_file');
            exit();
        }
    }
}
registerAccount();
