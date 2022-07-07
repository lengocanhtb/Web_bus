<?php
    include_once("model/User.php");;  
    $userModel = new User();
    if (!isset($_POST['Update'])){
        die('');
    }

    $HoTen = $_POST['HoTen'];
    $GioiTinh = $_POST['GioiTinh'];
    $DiaChi = $_POST['DiaChi'];
    $NgaySinh = $_POST['NgaySinh'];
    if (!$HoTen|| !$GioiTinh || !$DiaChi || !$NgaySinh){
      echo "Vui lòng nhập đầy đủ thông tin";
    } else {
        $MaKH = $_SESSION['userInf']['MaKH'];
        $result = $userModel->updateUser($HoTen,$GioiTinh,$DiaChi,$NgaySinh,$MaKH);
        if ($result) {
            ?>
                <script>
                    window.alert("Update thành công");
                </script>
            <?php
            echo("<script>location.href = 'index.php?page=profile';</script>");
        } else {
            echo "Error: ";
        }
    }
?>