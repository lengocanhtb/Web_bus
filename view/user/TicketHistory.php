<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thẻ</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include("view/layouts/user-header.php"); ?>
    <!-- main Lịch sử mua vé -->
    <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <?php include 'userinfo.php'; ?>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
        <form method = "post">
            <div class="card-body">
                <br>
                <div class="nav flex-column nav-pills me-3"  role="tablist" >
                    <button class="nav-link active" data-bs-toggle="pill"  type="button" role="tab"  onclick = "changeMuaVeThuong()" >Mua vé thường</button>
                    <button class="nav-link" data-bs-toggle="pill"  type="button" role="tab"  onclick = "changeMuaVeThang()">Mua vé tháng</button>
                </div>
                <div class="flex-fill tab-content">
                    <div class="tab-pane fade show active" id="MuaVeThuong">
                        <br></br> 
                        <div class="row gutters">                      
                        <table id="user" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Mã vé</th>
                            <th>Mã Tuyến</th>
                            <th>Mã Khách Hàng</th>
                            <th>Thời Gian</th>
                            <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <?php
                            require('controller/user/TicketHistory1Controller.php');
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                              ?>
                             <tbody><tr>
                              <td><?php echo $row['MaVe']; ?></td>
                              <td><?php echo $row['MaTuyen'];?></td>
                              <td><?php echo $row['MaKH'];?></td>
                              <td><?php echo $row['ThoiGian'];?></td>
                              <td><?php if($row['TrangThai']==1) echo "Chưa sử dụng"; else echo "Đã sử dụng"; ?></td>
                              </tr>
                              </tbody>
                            <?php
                            }
                            } else {
                                echo "0 results";
                            }
                        ?>            
                        </table>
                    </div>
                    </div>
                    <div class="tab-pane fade show active" id="MuaVeThang" style ="display:none;">
                    <br></br>  
                        <div class="row gutters">                     
                        <table id="user" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Mã vé</th>
                            <th>Mã Tuyến</th>
                            <th>Mã Khách Hàng</th>
                            <th>Thời Gian</th>
                            <th> Tháng </th>
                            <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <?php
                            require('controller/user/TicketHistory2Controller.php');
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                  ?>
                                 <tbody><tr>
                                  <td><?php echo $row['MaVe']; ?></td>
                                  <td><?php echo $row['MaTuyen']; ?></td>
                                  <td><?php echo $row['MaKH']; ?></td>
                                  <td><?php echo $row['ThoiGian']; ?></td>
                                  <td><?php echo $row['Thang']; ?></td>
                                  <td><?php if($row['TrangThai']==1) echo "Chưa sử dụng"; else echo "Đã sử dụng"; ?></td>
                                  </tr>
                                  </tbody>
                                  <?php
                              }
                              } else {
                                echo "0 results";
                              }  
                        ?>           
                        </table>
                        </div>
                    </div>
                </div>


                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary"><a href="index.php?page=quanlyThe" class="link-light">Hủy</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        </div>
        </div>
    </div>

    <?php include("view/layouts/footer.php") ?>
</body>
</html>
<script>
      function changeMuaVeThang() {
      document.getElementById('MuaVeThuong').style.display='none';
      document.getElementById('MuaVeThang').style.display='block';
      }
      function changeMuaVeThuong() {
      document.getElementById('MuaVeThuong').style.display='block';
      document.getElementById('MuaVeThang').style.display='none';
      }
  </script>