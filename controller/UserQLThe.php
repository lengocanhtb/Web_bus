<?php
    include_once("model/TheXeBus.php");  
    $theXeBusModel = new TheXeBus();
    $MaKH = $_SESSION['userInf']['MaKH'];
    $result = $theXeBusModel->view($MaKH);
    if(mysqli_num_rows($result) > 0) {
    $_SESSION['checkCard'] = 1;
    $row = mysqli_fetch_assoc($result);
    $_SESSION['theInf'] = $row;
    } else {
      $_SESSION['checkCard'] = 0;
    }
?>