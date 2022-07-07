

<?php 
require "view/layouts/admin-header.php";
?>
    <!-- main -->

    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><a href = "index.php?page=editBuses"  class="link-light">Quản lý tuyến buýt</a></button>
          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><a href = "index.php?page=editUser">Quản lý người dùng</a></button>
          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><a href = "index.php?page=editTicket">Cập nhật giá vé</a></button>
          <button class="nav-link" id="v-pills-ve-thuong-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thuong" type="button" role="tab" aria-controls="v-pills-ve-thuong" aria-selected="false"><a href = "index.php?page=scanTicket1">Duyệt vé thường</a></button>
          <button class="nav-link" id="v-pills-ve-thang-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thang" type="button" role="tab" aria-controls="v-pills-ve-thang" aria-selected="false"><a href = "index.php?page=scanTicket2">Duyệt vé tháng</a></button>
        </div>

        <div class="tab-content flex-fill" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div id="ViewBus">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tuyến xe</th>
                            <th>Điểm dừng</th>
                            <th>Thời gian hoạt động</th>
                            <th>Thời gian giãn cách</th>
                            <th>Giá vé</th>
                            <th>Số xe vận hành</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <?php
                        require('controller/admin/AdminViewBus.php');
                    ?>
                </table>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                <button class="w- btn btn-lg btn-primary" type="button" onclick= "changeBus1()">Thêm tuyến</button>
            
            </div>
            </div>
            <div id="ThemBus" style="display: none;">
                <form method="post">
                    <div class="form-group">
                        <label>Mã Tuyến</label>
                        <input type="text" class="form-control" id="fullName" name="MaTuyen" placeholder="Enter MaTuyen">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Số xe</label>
                        <input type="number" class="form-control" name="SoXe" placeholder="Enter SoXe">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Thời Gian Chạy</label>
                        <input type="time" class="form-control" name="TGChay" placeholder="Tgian">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Thời Gian Dừng</label>
                        <input type="time" class="form-control"name="TGDung" placeholder="Tgian">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Thời Gian Giãn Cách</label>
                        <input type="number" class="form-control"name="TGGianCach" placeholder="phút">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Giá Vé</label>
                        <input type="number" class="form-control"name="GiaVe" placeholder="đồng">
                    </div>
                    <br>
                    <button class="w- btn btn-lg btn-primary" onclick= "changeBus2()" type="submit">Hủy</button> 
                    <button class="w- btn btn-lg btn-primary" name="CreateBus" type="submit">Thêm tuyến</button>           
                </form>
            </div>

        </div>
      </div>
    </div>
    <hr>
    <script src="jquery-3.5.1.js"></script>
    <script src="jquery.dataTables.min.js"></script>
    <script src="datagrid.js"></script>
<?php require "view/layouts/footer.php";?>
