<?php
require_once 'model/VeThuong.php';
$veThuongModel = new VeThuong();
$ticket1 = $veThuongModel->view();
foreach($ticket1 as $ticket) {
    $MaVe = $ticket['MaVe'];
    $MaTuyen = $ticket['MaTuyen'];
    $MaKH = $ticket['MaKH'];
    $ThoiGian = $ticket['ThoiGian'];
    $TrangThai = $ticket['TrangThai'];
    ?>
   <tbody><tr>
    <td><?php echo $MaVe; ?></td>
    <td><?php echo $MaTuyen; ?></td>
    <td><?php echo $MaKH; ?></td>
    <td><?php echo $ThoiGian; ?></td>
    <td><?php if($TrangThai==1) echo "Chưa sử dụng"; else echo "Đã sử dụng"; ?></td>
    <td><form method = "post"><button type = "submit" name = "<?php echo $MaVe; ?>"> Duyệt </button></form></td>
    </tr>
    </tbody>
    <?php
      if(isset($_POST[$MaVe])){
          $update = $veThuongModel->update($MaVe);
          if ($update) {
              echo("<script>location.href = 'index.php?page=scanTicket1';</script>");
          } else {
              echo "Error: ";
          } 
      }
    }
      if(isset($_POST["Duyet"])){
        $MaVe = $_POST['MaVe'];
        $TrangThai = $veThuongModel->status($MaVe);
        if($TrangThai==1){
        $update = $veThuongModel->update($MaVe);
          if ($update == true) {
            echo("<script>location.href = 'index.php?page=scanTicket1';</script>");
            ?>
              <script>
                  window.alert("Update thành công");
              </script>
            <?php
          } else {
            echo "Error:";
          } 
      } else {
            ?>
              <script>
                  window.alert("Vé đã sử dụng hoặc mã vé không chính xác");
              </script>
            <?php
      }
}
?>