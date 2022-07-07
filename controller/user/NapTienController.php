<?php
    include_once 'model/TheXeBus.php';
    $theXeBusModel = new TheXeBus();

    if(isset($_POST['NapTien'])){
        $SoThe = $_POST['SoThe'];
        $SoTien = $_POST['SoTien'];
        $MaKH = $_SESSION['userInf']['MaKH'];
        $result = $theXeBusModel->getCard($SoThe, $MaKH);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $SoTienGoc = $row['SoDu'];
            $MaThe = $row['MaThe'];
            if($SoTien>0){
                $SoDu = $SoTienGoc + $SoTien;
                $result = $theXeBusModel->addMoney($MaThe, $SoDu);
                if ($result) {
                    ?>
                        <script>
                            window.alert("Nạp tiền thành công");
                        </script>
                    <?php
                } else {
                    echo "Error: ";
                }
            } else {
                echo "Số tiền nhập vào không hợp lệ";
            }   
        } else {
            echo "Số thẻ không chính xác";
        }
    }
?>