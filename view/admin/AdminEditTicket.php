
<?php 
require "view/layouts/admin-header.php";
require_once "controller/admin/EditTicket.php";
?>
    <!-- main -->

    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><a href = "index.php?page=editBuses">Quản lý tuyến buýt</a></button>
          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><a href = "index.php?page=editUser">Quản lý người dùng</a></button>
          <button class="nav-link active" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><a href = "index.php?page=editTicket"  class="link-light">Cập nhật giá vé</a></button>
          <button class="nav-link" id="v-pills-ve-thuong-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thuong" type="button" role="tab" aria-controls="v-pills-ve-thuong" aria-selected="false"><a href = "index.php?page=scanTicket1">Duyệt vé thường</a></button>
          <button class="nav-link" id="v-pills-ve-thang-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ve-thang" type="button" role="tab" aria-controls="v-pills-ve-thang" aria-selected="false"><a href = "index.php?page=scanTicket2">Duyệt vé tháng</a></button>
        </div>

        <div class="tab-content flex-fill" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <!-- oke -->

            <div style="width: 100%; float:left">
              <h4>Vé thường</h4>
              <div class="mb-3">
                <form method ="post">
                <label for="tuyến" class="form-label">Mã Tuyến:</label>
                <select id="tuyenXe" name="tuyenxe" class="form-select">
                <?php 
                  foreach($buses as $bus) {
                  $MaTuyen = $bus['MaTuyen'];
                ?>
                  <option value="<?php echo $MaTuyen?>"><?php echo $MaTuyen?></option>";
                <?php
                  }
                ?>
                </select>
              </div>
              <div class="mb-3">
                  <label for="formGiaThuong" class="form-label">Giá vé</label>
                  <input type="number" class="form-control" id="formGiaThuong" name= "GiaThuong" placeholder="VNĐ/lượt">
              </div>
              <br>
              <button class="w- btn btn-lg btn-primary" type="submit" name ="updateThuong">Cập nhật</button>
              </form>
            </div>


            <div style="width: 100%; float: right;">
              <h4>Vé tháng</h4>
              <div class="mb-3">
                <form method="post">
                <label for="form1tuyen" class="form-label">Một tuyến</label>
                <input type="number" class="form-control" id="form1tuyen" name="GiaMotTuyen" placeholder="VNĐ/tháng">
                <br>
                <button class="w- btn btn-lg btn-primary" type="submit" name ="updateMotTuyen">Cập nhật</button>
                </form>
              </div>
              <div class="mb-3">
                <form method="post">
                <label for="formLienTuyen" class="form-label">Liên tuyến</label>
                <input type="text" class="form-control" id="formLienTuyen" name="GiaLienTuyen" placeholder="VNĐ/tháng">
                <br>
              <button class="w- btn btn-lg btn-primary" type="submit" name ="updateLienTuyen">Cập nhật</button>
              </form>
              </div>
            </div>

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
