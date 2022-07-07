<?php
require_once 'model/TuyenXe.php';
require_once 'model/LoaiVeThang.php';
$tuyenXeModel = new TuyenXe();
$loaiVeThangModel = new LoaiVeThang();
$buses = $tuyenXeModel->view();
if(isset($_POST['updateThuong'])){
    $MaTuyen = $_POST['tuyenxe'];
    $GiaVe = $_POST['GiaThuong'];
    $update = $tuyenXeModel->updatePrice($MaTuyen, $GiaVe);
    if ($update) {
      ?>
      <script>
          window.alert("Update thành công");
      </script>
      <?php
    } else {
    echo "Error: ";
  }
}
// update một tuyến
if(isset($_POST['updateMotTuyen'])){
    $GiaVe = $_POST['GiaMotTuyen'];
    $updateMotTuyen = $loaiVeThangModel->updatePrice($GiaVe, 1);
    if ($updateMotTuyen==true) {
      ?>
      <script>
          window.alert("Update thành công");
      </script>
      <?php
      } else {
      echo "Error: ";
  }
}

// update liên tuyến 
if(isset($_POST['updateLienTuyen'])){
    $GiaVe = $_POST['GiaLienTuyen'];
    $updateLienTuyen = $loaiVeThangModel->updatePrice($GiaVe, 2);
    if ($updateLienTuyen==true) {
      ?>
      <script>
          window.alert("Update thành công");
      </script>
      <?php
    } else {
    echo "Error: ";
  }
}
?>