<?php
    include_once("model/TheXeBus.php");
    include_once("model/TheNganHang.php"); 
    $theXeBusModel = new TheXeBus();
    $theNganHangModel = new TheNganHang();
    if (isset($_POST['DangKyThe'])){
        $SoThe = $_POST['SoThe'];
        $NganHang = $_POST['Bank'];
            if (!$SoThe|| !$NganHang ){
                echo '<script> window.alert("Vui lòng nhập đầy đủ thông tin");</script>';
            } else {
                $MaKH = $_SESSION['userInf']['MaKH'];
                $SĐT = $_SESSION['userInf']['SĐT'];
                $result = $theNganHangModel->create($SoThe, $NganHang, $MaKH);
                $result2 = $theXeBusModel->create($SĐT, 0, 1, $MaKH, $SoThe);
                if ($result == true && $result2 == true) {
                    ?>
                        <script>
                            window.alert("Đăng ký thành công");
                        </script>
                    <?php
                } else {
                    echo "Error: ";
        }
    }
}
?>