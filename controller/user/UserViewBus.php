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
    echo "</tr>";
    echo "</tbody>";
  }
?>