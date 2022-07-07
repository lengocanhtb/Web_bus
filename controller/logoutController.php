<?php 
if(isset($_POST['logout'])){
if (isset($_SESSION['userInf'])){
    unset($_SESSION['userInf']); // xóa session login
}
header('Location: index.php');
}
?>