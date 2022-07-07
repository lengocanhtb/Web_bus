<?php
require_once 'model/VeThang.php';
$veThangModel = new VeThang();
$ticket2 = $veThangModel->view();
  foreach($ticket2 as $ticket) {
    $MaVe = $ticket['MaVe'];
    ?>
        <tbody>
            <tr>
                <td><?php echo $ticket['MaVe']; ?></td>
                <td><?php echo $ticket['MaTuyen']; ?></td>
                <td><?php echo $ticket['MaKH']; ?></td>
                <td><?php echo $ticket['ThoiGian']; ?></td>
                <td><?php echo $ticket['Thang']; ?></td>
                <td><?php if($ticket['TrangThai']==1) echo "Chưa sử dụng"; else echo "Đã sử dụng"; ?></td>
                <td><form method = "post"><button type = "submit" name = "<?php echo $MaVe; ?>"> Duyệt </button></form></td>
            </tr>
        </tbody>
    <?php                  
    if(isset($_POST[$MaVe])){
        $result = $veThangModel->update($MaVe);
        if($result==true) {
            echo("<script>location.href = 'index.php?page=scanTicket2';</script>");
            echo "Update thành công";
        } else {
      echo "Error";
    } 
  }
  }

  if(isset($_POST["Duyet2"])){
    $MaVe = $_POST['MaVe'];
      $TrangThai = $veThangModel->status($MaVe);
      if($TrangThai==1){
        $update = $veThangModel->update($MaVe);
        if ($update == true) {
          echo("<script>location.href = 'index.php?page=scanTicket2';</script>");
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