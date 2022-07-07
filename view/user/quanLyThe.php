<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thẻ</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php include("view/layouts/user-header.php"); ?>
    <!-- main -->

    <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <?php include'userinfo.php'; ?>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mb-2 text-primary">Thông tin thẻ xe buýt</h6>
            </div>
            <table class="table">
                <?php require('controller/UserQLThe.php'); 
                if($_SESSION['checkCard']==1){?>
                <tr>
                    <th scope="row">Mã thẻ: </th>
                    <td colspan="2"><?php echo $_SESSION['theInf']['MaThe'];?></td>
                </tr>
                <tr>
                    <th scope="row">Ngày đăng kí: </th>
                    <td colspan="2">13/10/2021</td>
                </tr>
                <tr>
                    <th scope="row">Số dư:</th>
                    <td colspan="2"><?php echo $_SESSION['theInf']['SoDu'];?></td>
                </tr>
                <tr>
                    <th scope="row">Thẻ liên kết:</th>
                    <td colspan="2"><?php echo $_SESSION['theInf']['SoThe'];?></td>
                </tr>
            </table>

            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <button type="button" id="submit" name="submit" class="btn btn-secondary"><a href="index.php?page=user" class="link-light">Thoát</a></button>
                        <button type="button" id="submit" name="submit" class="btn btn-primary"><a href="index.php?page=napTien" class="link-light">Nạp tiền</a></button>
                        <button type="button" id="submit" name="submit" class="btn btn-primary"><a href="index.php?page=ticketHistory" class="link-light">Lịch sử mua vé</a></button>
                        <?php
                        } else {
                            echo "Bạn chưa có thẻ xe buýt!!!<br>";
                            echo '<button type="button" id="submit" name="submit" class="btn btn-primary"><a href="index.php?page=dangKyThe" class="link-light">Đăng ký Thẻ xe Buýt</a></button>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            </div>
        </div>
        </div>
    </div>
</body>
</html>