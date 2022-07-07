<?php
    require_once 'model/VeThang.php';
    $veThuongModel = new VeThang();
    $MaKH = $_SESSION['userInf']['MaKH'];
    $result = $veThuongModel->getTicketByUser($MaKH);
?>