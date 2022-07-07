
<?php 
require "view/layouts/admin-header.php";
?>
    <!-- main -->

    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><a href = "index.php?page=editBuses">Quản lý tuyến buýt</a></button>
          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><a href = "index.php?page=editUser">Quản lý người dùng</a></button>
          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><a href = "index.php?page=editTicket">Cập nhật giá vé</a></button>
          <button class="nav-link active" id="v-pills-ve-thuong-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thuong" type="button" role="tab" aria-controls="v-pills-ve-thuong" aria-selected="false"><a href = "index.php?page=scanTicket1"  class="link-light">Duyệt vé thường</a></button>
          <button class="nav-link" id="v-pills-ve-thang-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thang" type="button" role="tab" aria-controls="v-pills-ve-thang" aria-selected="false"><a href = "index.php?page=scanTicket2">Duyệt vé tháng</a></button>
        </div>

        <div class="tab-content flex-fill" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <!-- oke -->

            <table id="user" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Mã vé</th>
      <th>Mã Tuyến</th>
      <th>Mã Khách Hàng</th>
      <th>Thời Gian</th>
      <th>Trạng Thái</th>
      <th> Duyệt </th>
    </tr>
  </thead>
  <?php
    require('controller/admin/AdminScanTicketThuong.php');
  ?>            
</table>
<br>
</br>
<h2>Nhập Mã Vé </h2>
<form method = "post">
<input type="number" name="MaVe">
<br></br>
<button class="w- btn btn-lg btn-primary" type="submit" name="Duyet">Duyệt</button>
<br>
</form>

            <!-- oke -->
            </div>
        </div>
    </div>
    <hr>
    <script src="jquery-3.5.1.js"></script>
    <script src="jquery.dataTables.min.js"></script>
    <script src="datagrid.js"></script>
<?php require "view/layouts/footer.php";?>
