<?php
    require_once 'model/TheXeBus.php';
    require_once 'model/TuyenXe.php';
    require_once 'model/VeThang.php';
    $theXeBusModel = new TheXeBus();
    $tuyenXeModel = new TuyenXe();
    $veThangModel = new VeThang();

    // lấy danh sách tuyến xe
    $buses = $tuyenXeModel->view();
    // chọn tuyến xe và lấy giá vé
    $GiaVe = 0;
    // lấy giá vé một tuyến
    if(isset($_POST['MuaMotTuyen'])) {
        $result = $veThangModel->getPriceTicket(1);
        $row = mysqli_fetch_assoc($result);
        $GiaVe = $row['GiaVe'];
        $_SESSION['GiaVe']=$GiaVe;
        $Thang = $_POST['Thang'];
        $_SESSION['Thang'] = $Thang;
        $MaTuyen = $_POST['tuyenxe'];
        $_SESSION['MaTuyen'] = $MaTuyen;
        $_SESSION['MaLoaiVe'] = 1;
        $_SESSION['check1'] = 1;            
    }
    // lấy giá liên tuyến
    if(isset($_POST['MuaLienTuyen'])) {
        $result = $veThangModel->getPriceTicket(2);
        $row = mysqli_fetch_assoc($result);
        $GiaVe = $row['GiaVe'];
        $_SESSION['GiaVe']=$GiaVe;
        $Thang = $_POST['Thang'];
        $_SESSION['Thang'] = $Thang;
        $MaTuyen = null;
        $_SESSION['MaTuyen'] = $MaTuyen;
        $_SESSION['MaLoaiVe'] = 2;
        $_SESSION['check1'] = 1;             
    }
    if(isset($_POST['ThanhToan2'])) {
        if($_SESSION['check1'] == 1) {
        $_SESSION['check1'] = 0; 
        $MaKH = $_SESSION['userInf']['MaKH'];
        $ThoiGian = date("h:i:s");
        $Thang = $_SESSION['Thang'];
        $MaTuyen = $_SESSION['MaTuyen'];
        $MaLoaiVe = $_SESSION['MaLoaiVe'];
        $GiaVe = $_SESSION['GiaVe'];
        if($theXeBusModel->checkCard($MaKH)==true){
        $result = $theXeBusModel->getMoney($MaKH);
        if ($result != null){
            $row = mysqli_fetch_assoc($result);
            $SoDu = $row['SoDu'] - $GiaVe;
            if ($SoDu > 0) {
                $update = $theXeBusModel->updateMoney($SoDu);
                $result = $veThangModel->addTicket($MaTuyen, $MaKH, $ThoiGian, $Thang, $MaLoaiVe);
                if ($result) {
                    ?>
                    <script>
                        window.alert("Mua vé thành công");
                    </script>
                    <?php
                } else {
                    echo "Error: <br>";
                }
            } else {
                ?>
                    <script>
                        window.alert("Không đủ tiền để thanh toán");
                    </script>
                <?php
            }
        } else {
            echo "Error: <br>";
        }
        } else {
            echo '<script> window.alert("Bạn chưa có thẻ xe buýt!!! Vui lòng đăng ký thẻ để mua vé");</script>';
        }
    }
    }
    