<?php 
require "view/layouts/admin-header.php";
?>
    <!-- main -->
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><a href = "index.php?page=editBuses">Quản lý tuyến buýt</a></button>
          <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><a href = "index.php?page=editUser"  class="link-light">Quản lý người dùng</a></button>
          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><a href = "index.php?page=editTicket">Cập nhật giá vé</a></button>
          <button class="nav-link" id="v-pills-ve-thuong-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thuong" type="button" role="tab" aria-controls="v-pills-ve-thuong" aria-selected="false"><a href = "index.php?page=scanTicket1">Duyệt vé thường</a></button>
          <button class="nav-link" id="v-pills-ve-thang-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thang" type="button" role="tab" aria-controls="v-pills-ve-thang" aria-selected="false"><a href = "index.php?page=scanTicket2">Duyệt vé tháng</a></button>
        </div>

        <div class="tab-content flex-fill" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <table id="user" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Mã KH</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Thẻ buýt</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <?php
                    require('controller/admin/AdminViewUser.php');
                    foreach($users as $user){
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $user['MaKH']; ?></td>
                    <td><?php echo $user['HoTen']; ?></td>
                    <td><?php echo $user['NgaySinh']; ?></td>
                    <td><?php echo $user['SĐT']; ?></td>
                    <td><?php echo $user['DiaChi']; ?></td>
                    <td>null</td>
                    <td>Sửa</td>
                    <td><input type='checkbox'></td>
                  </tr>
                </tbody>
                <?php } ?>            
              </table>
              <button class="w- btn btn-lg btn-primary" type="button">Xóa</button>
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
