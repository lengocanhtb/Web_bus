<?php
    require_once 'model/TheXeBus.php';
    require_once 'model/TuyenXe.php';
    require_once 'model/VeThuong.php';
    require_once 'model/TuyenBuyt.php';
    $theXeBusModel = new TheXeBus();
    $tuyenXeModel = new TuyenXe();
    $veThuongModel = new VeThuong();
    $tuyenBuytModel = new TuyenBuyt();

    // lấy danh sách tuyến xe
    $buses = $tuyenXeModel->view();

    // chọn tuyến xe và lấy giá vé
    $GiaVe = 0;
    if(isset($_POST['submit'])){ 
        $MaTuyen = $_POST['tuyenxe'];
        $_SESSION['MaTuyen'] = $MaTuyen;
        $result = $tuyenBuytModel->getPriceTicket($MaTuyen);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $GiaVe = $row['GiaVe'];
            $_SESSION['GiaVe']=$GiaVe;
        }
        $_SESSION['check1'] = 1;
    }
    
    // 
    if(isset($_POST['ThanhToan'])) {
        if($_SESSION['check1'] == 1) {
        $_SESSION['check1'] = 0;
        $MaKH = $_SESSION['userInf']['MaKH'];
        $MaTuyen = $_SESSION['MaTuyen'];
        $GiaVe = $_SESSION['GiaVe'];
        $ThoiGian = date("h:i:s");
        if($theXeBusModel->checkCard($MaKH)==true){
        $result = $theXeBusModel->getMoney($MaKH);
        if ($result != null){
            $row = mysqli_fetch_assoc($result);
            $SoDu = $row['SoDu'] - $GiaVe;
            if ($SoDu > 0) {
                // trừ tiền trong thẻ
                $update = $theXeBusModel->updateMoney($SoDu);
                // thêm vé vào list vé
                $addticket = $veThuongModel->addTicket($MaTuyen, $MaKH, $ThoiGian);
                if ($addticket) {
                    ?>
                    <script>
                        window.alert("Mua vé thành công");
                    </script>
                    <?php
                } else {
                    echo "Error: 1<br>";
                }
            } else {
                ?>
                    <script>
                        window.alert("Không đủ tiền để thanh toán");
                    </script>
                <?php
            }
        } else {
            echo "Error: 2 <br>";
        }
        } else {
            echo '<script> window.alert("Bạn chưa có thẻ xe buýt!!! Vui lòng đăng ký thẻ để mua vé");</script>';
        }
    }
}
