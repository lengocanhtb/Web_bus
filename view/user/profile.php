<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

     <!-- Boostrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php include("view/layouts/user-header.php"); ?>

    <!-- User Info -->
    <div>
    <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">

            <?php include 'userinfo.php'; ?>

        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
            <form method = "post">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Thông tin</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Họ và tên</label>
                            <input type="text" class="form-control" id="fullName" name="HoTen" placeholder="<?php echo $_SESSION['userInf']['HoTen']; ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Giới Tính">Giới tính</label>
                            <br>
                            <select name="GioiTinh" id="GioiTinh">
                                <option value="0" selected="selected">Nam</option>
                                <option value="1">Nữ </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="adddr">Địa chỉ</label>
                            <input type="name" class="form-control" id="addr" name="DiaChi" placeholder="<?php echo $_SESSION['userInf']['DiaChi'];?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="birth">Ngày sinh</label>
                            <input type="date" class="form-control" id="birth" name="NgaySinh" placeholder="<?php echo $_SESSION['userInf']['NgaySinh'];?>">
                        </div>
                    </div>
                </div>
                
                <br>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                            <button type="submit" name="Update" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            require 'controller/user/updateProfileController.php';
            ?>
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>
    <hr>
    <?php include("view/layouts/footer.php"); ?>
</body>
</html>