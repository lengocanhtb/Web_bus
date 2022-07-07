<?php
require_once 'model/TuyenXe.php';
require_once 'model/TuyenBuyt.php';
$tuyenXeModel = new TuyenXe();
$tuyenBuytModel = new TuyenBuyt();
$buses = array();
$buses = $tuyenXeModel->view();

  foreach($buses as $bus) {
    $MaTuyen = $bus['MaTuyen'];
    $result2 = $tuyenBuytModel->getListByTuyen($MaTuyen);
    echo "<tbody><tr>";
    echo "<td>".$bus['MaTuyen']."</td>";
    echo "<td>";
    while($row2 = mysqli_fetch_assoc($result2)){
      echo $row2['DiemDung']."<br>";
    }
    echo"</td>";
    echo "<td>".$bus['TGChay']."-".$bus['TGDung']."</td>";
    echo "<td>".$bus['TGGianCach']." phút</td>";
    echo "<td>".$bus['GiaVe']." đồng </td>";
    echo "<td> Xe ".$bus['SoXe']."</td>";
    echo "<td><form method ='post'><button type='submit' name = '{$MaTuyen}sua'>Sửa</button></form></td>";
    echo "<td><form method ='post'><button type='submit' name = '{$MaTuyen}xoa'>Xóa</button></form></td>";
    echo "</tr>";
    echo "</tbody>";
    if(isset($_POST[$MaTuyen."xoa"])){
      $result = $tuyenXeModel->delete($MaTuyen);
      if($result == true) {
        echo("<script>location.href = 'index.php?page=editBuses';</script>");
      echo "Xóa thành công";
      } else {
        echo "Error:";
      }
    }
  }
  if(isset($_POST[$MaTuyen."sua"])){
    // $sql = "DELETE FROM TuyenXe WHERE MaTuyen = '{$MaTuyen}'";
    // mysqli_query($conn, $sql);
    // echo "Xóa thành công";
    // echo "<script>";
    // echo "document.getElementById('ViewBus').style.display='none'";
    // echo "document.getElementById('EditBus').style.display='block'";
    // echo "</script>";
  }

// thêm bus
    if (isset($_POST['CreateBus'])){
        $MaTuyen = $_POST['MaTuyen'];
        $SoXe = $_POST['SoXe'];
        $TGChay = $_POST['TGChay'];
        $TGDung = $_POST['TGDung'];
        $TGGianCach = $_POST['TGGianCach'];
        $GiaVe = $_POST['GiaVe'];
        if (!$MaTuyen|| !$SoXe || !$TGChay || !$TGGianCach || !$TGDung || !$GiaVe){
            echo "Nhập thông tin đầy đủ";
        } else {
            $result = $tuyenXeModel->create($MaTuyen, $SoXe, $TGChay, $TGDung, $TGGianCach, $GiaVe);
            if ($result == true) {
              ?>
              <script>
                  window.alert("Tạo tuyến xe thành công");
              </script>
              <?php
            } else {
                echo "Error: <br>";
            }
        }
    }
?>