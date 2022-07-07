<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xe Bus</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <?php include("view/layouts/header.php"); ?>
    <!-- Main -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-3">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tìm đường xe buýt</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tìm kiếm</button>
                    
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="mb-3">
                        <label for="formNhapDiemDi" class="form-label">Điểm đi</label>
                        <input type="text" class="form-control" id="formNhapDiemDi" placeholder="Nhập điểm đi">
                      </div>
                      <div class="mb-3">
                        <label for="formNhapDiemDen" class="form-label">Điểm đến</label>
                        <input type="text" class="form-control" id="formNhapDiemDen" placeholder="Nhập điểm đến">
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Tìm đường</button>
                      </div>
                      <br>
                      <div>
                          <h4>Kết quả:</h4>
                      </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="mb-3">
                        <label for="TimTheo" class="form-label">Tìm theo:</label>
                        <select class="form-select" aria-label="TimTheo">
                            <option value="1">Tuyến bus</option>
                            <option value="2">Điểm dừng</option>
                            <option value="3">Điểm bán vé</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formTuKhoa" class="form-label">Từ khóa</label>
                        <input type="text" class="form-control" id="formTuKhoa" placeholder="Nhập Từ Khóa">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Tìm</button>
                    </div>
                    <br>
                    <div>
                        <h4>Kết quả:</h4>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tin buýt -->
        <div class="col-sm-9">
            <h3>Danh sách các chuyến xe <br></br></h3>
              <div class="row">
              <?php
                foreach($buses as $bus) { ?>
                      <div class='col-md-4'>
                      <div class='thumbnail'>
                      <a href='view/images/xebuyt1.jpg' target='_blank'>
                      <img src='view/images/xebuyt1.jpg' alt='Bus' style='width:100%'>
                      <div class='caption'>
                      <p>Chuyến số <?php echo $bus['SoXe']?><br>Thời gian:<?php echo $bus['TGChay']?>-<?php echo $bus['TGDung']?></p>
                      </div>
                      </a></div></div>
                    <?php
                  }
                ?>
              
              </div>
        </div>
    </div>
    <hr>
    <?php include("layouts/footer.php"); ?>

    
</body>
</html>