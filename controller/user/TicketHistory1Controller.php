<?php
    require_once 'model/VeThuong.php';
    $veThuongModel = new VeThuong();
    $MaKH = $_SESSION['userInf']['MaKH'];
    $result = $veThuongModel->getTicketByUser($MaKH);
?>
