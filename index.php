<?php
session_start();
// add thu vien  
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }
    else {
        $page = 'index';
    }
    if($page=='index') {
        require 'controller/indexController.php';
        require 'view/index.php';
    }
    if($page=='login') {
        require 'view/login.php';
        require 'controller/loginController.php';
    }
    if($page=='signup') {
        require 'view/signup.php';
        require 'controller/signupController.php';
    }
    if($page == 'user') {
        require 'controller/indexController.php';
        require 'view/user/index.php';
    }
    if($page == 'buyticket' || $page == 'muaVeThuong') {
        require 'view/user/muave/veThuong.php';
    }
    if ($page == 'userviewbus') {
        require 'view/user/viewBus.php';
    }
    if ($page == 'viewbus') {
        require 'view/viewBus.php';
    }
    if($page == 'profile') {
        require 'view/user/profile.php';
    }
    if($page == 'quanlythe') {
        require 'view/user/quanLyThe.php';
    }
    if($page == 'napTien') {
        require 'view/user/napTien.php';
    }
    if($page == 'ticketHistory') {
        require 'view/user/ticketHistory.php';
    }
    if($page == 'dangKyThe') {
        require 'view/user/dangKyThe.php';
    }
    if($page == 'muaVeThang') {
        require 'view/user/muave/veThang.php';
    }
    if($page=='admin') {
        require 'view/admin/adminEditBuses.php';
    }
    if($page == 'editBuses') {
        require 'view/admin/adminEditBuses.php';
    }
    if($page == 'editUser') {
        require 'view/admin/AdminEditUser.php';
    }
    if($page == 'editTicket') {
        require 'view/admin/adminEditTicket.php';
    }
    if($page == 'scanTicket1') {
        require 'view/admin/AdminScanTicketThuong.php';
    }
    if($page == 'scanTicket2') {
        require 'view/admin/AdminScanTicketThang.php';
    }
    
?>