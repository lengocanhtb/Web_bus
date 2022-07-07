<?php
    include_once("model/TuyenXe.php");  
    $tuyenxemodel = new TuyenXe();
    $buses = $tuyenxemodel->view();
?>