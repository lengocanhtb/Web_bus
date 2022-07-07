<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyến xe</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
</head>
<body>
    <?php include("view/layouts/user-header.php"); ?>

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
        <div class="col-sm-9" id="ViewBus">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Tuyến xe</th>
                        <th>Điểm dừng</th>
                        <th>Thời gian hoạt động</th>
                        <th>Thời gian giãn cách</th>
                        <th>Giá vé</th>
                        <th>Số xe vận hành</th>
                    </tr>
                </thead>
                <?php
                    require('controller/user/UserViewBus.php');
                ?>
            </table>
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                </ul>
                    
        </div>
        </div>
    </div>
    <hr>
<?php include("view/layouts/footer.php"); ?>
</body>
</html>
