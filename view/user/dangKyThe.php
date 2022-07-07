<?php include 'controller/user/DangKyTheController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thẻ</title>

     <!-- Boostrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    <?php include("view/layouts/user-header.php"); ?>
    <!-- main dang ki the -->
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
                        <h6 class="mb-2 text-primary">Đăng ký thẻ xe buýt</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="bankcardNum">Số thẻ ngân hàng</label>
                            <input type="text" name ="SoThe" class="form-control" id="bankcardNum" placeholder="Enter bank card number">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="bank">Ngân hàng</label>
                            <input type="text" name="Bank" class="form-control" id="bank" placeholder="Enter bank's name">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" id="theVatLy">
                            <label class="form-check-label" for="theVatLy">
                                Nhận thẻ vật lý
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary"><a href="index.php?page=user" class="link-light">Thoát</a></button>
                            <button type="submit" name ="DangKyThe" class="btn btn-primary">Đăng ký</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
    
    <?php include("view/layouts/footer.php"); ?>
</body>
</html>