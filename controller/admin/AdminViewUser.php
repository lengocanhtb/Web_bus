<?php
require_once 'model/User.php';
$userModel = new User();
$users = $userModel->view();
?>