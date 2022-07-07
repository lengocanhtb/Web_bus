<?php 
require "view/layouts/admin-header.php";
?>
    <!-- main -->

    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><a href = "index.php?page=editBuses">Quản lý tuyến buýt</a></button>
          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><a href = "index.php?page=editUser">Quản lý người dùng</a></button>
          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><a href = "index.php?page=editTicket">Cập nhật giá vé</a></button>
          <button class="nav-link" id="v-pills-ve-thuong-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thuong" type="button" role="tab" aria-controls="v-pills-ve-thuong" aria-selected="false"><a href = "index.php?page=scanTicket1">Duyệt vé thường</a></button>
          <button class="nav-link active" id="v-pills-ve-thang-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thang" type="button" role="tab" aria-controls="v-pills-ve-thang" aria-selected="false"><a href = "index.php?page=scanTicket2"  class="link-light">Duyệt vé tháng</a></button>
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
                        <th> Tháng </th>
                        <th>Trạng Thái</th>
                        <th> Duyệt </th>
                    </tr>
                </thead>
                <?php
                    require_once "controller/admin/AdminScanTicketThang.php";
                ?>            
            </table>
            <br>
            </br>
            <h2>Nhập Mã Vé </h2>
              <form method = "post">
                  <input type="number" name="MaVe">
                  <br>
                  </br>
                      <button class="w- btn btn-lg btn-primary" type="submit" name="Duyet2">Duyệt</button>
                  <br>
              </form>
<?php

?>

            <!-- oke -->
            </div>
        </div>
    </div>
    <hr>
    <script src="jquery-3.5.1.js"></script>
    <script src="jquery.dataTables.min.js"></script>
    <script src="datagrid.js"></script>
    <!-- Bootstrap Bundle with Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Separate Popper and Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php require "view/layouts/footer.php";?>
