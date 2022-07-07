<?php require 'controller/user/muave/VeThuongController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua vé</title>

     <!-- Boostrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php include("view/layouts/user-header.php"); ?>
    <!-- Mua ve -->
    <div class="d-flex align-items-start" style="width: 100%">
    <div class="nav flex-column nav-pills me-3"  role="tablist" >
        <button class="nav-link active" data-bs-toggle="pill"  type="button" role="tab"> <a href = index.php?<?php echo "page=muaVeThuong";?>  class="link-light">Mua vé thường</a></button>
        <button class="nav-link" data-bs-toggle="pill"  type="button" role="tab"><a href = index.php?<?php echo "page=muaVeThang";?>>Mua vé tháng</a></button>
    </div>
    <div class="flex-fill tab-content">
        <div class="tab-pane fade show active" id="MuaVeThuong">
            <div style="width: 40%; float:left">
                <form method="post">
                    <legend><h1>Mua vé thường</h1></legend>
                    <div class="mb-3">
                        <label for="Select" class="form-label">Chọn tuyến xe</label>
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
                    <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>

            <div style="width: 50%; float:right">
                <h1>Giá vé: 
                <?php
                echo $GiaVe.' đồng';
                ?>
                </h1>
                <form method="post">
                    <button type="submit" name="ThanhToan" class="btn btn-primary">Thanh toán</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <hr>
    <?php include("view/layouts/footer.php");?>
</body>
</html>
