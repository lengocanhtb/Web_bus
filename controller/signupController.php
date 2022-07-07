<?php
    include_once("model/User.php"); 
    include_once("model/Admin.php"); 
    $userModel = new User();
    $adminModel = new Admin();
    if (isset($_POST['SignUp']) && isset($_POST['SĐT']) && isset($_POST['MatKhau1']) && isset($_POST['MatKhau2'])){
        $SĐT = $_POST['SĐT'];
        $HoTen = $_POST['HoTen'];
        $MatKhau1 = $_POST['MatKhau1'];
        $MatKhau2 = $_POST['MatKhau2'];
        $result1 = $userModel->getUser($SĐT);
        $result2 = $adminModel->getAdmin($SĐT);
        // check độ dài sđt

        
        if (mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0 ) {
            echo '<script> window.alert("SĐT đã được sử dụng!!!");</script>';
        } else {
            if($MatKhau1===$MatKhau2){
                $result = $userModel->addUser($SĐT, $MatKhau1, $HoTen);
                if ($result) {
                    echo '<script> window.alert("Tạo tài khoản thành công!! Đi đến trang đăng nhập");</script>';
                    header('Location: index.php?page=login');
                } else {
                    echo "Error: ";
                }
            } else {
                echo "Nhập thông tin!!!";
            }
        }
    } 
?>