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
        <button class="nav-link" data-bs-toggle="pill"  type="button" role="tab">Mua vé tháng</button>
    </div>
    <div class="flex-fill tab-content">
        <div class="tab-pane fade show active" id="MuaVeThuong">
            <!-- <?php include("view/user/muaVe/veThuong.php"); ?> -->
            <div style="width: 40%; float:left">
                <form method="post">
                    <legend><h1>Mua vé thường</h1></legend>
                    <div class="mb-3">
                    <label for="Select" class="form-label">Chọn tuyến xe</label>
                    <select id="tuyenXe" name="tuyenxe" class="form-select">
                        <?php 
                        $conn = new mysqli("localhost", "root", "", "bus");
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        $sql= "SELECT * FROM TuyenXe";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        $MaTuyen = $row['MaTuyen'];
                        ?>
                        <option value="<?php echo $MaTuyen?>"><?php echo $MaTuyen?></option>";
                        <?php
                        }
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
                if(isset($_POST['submit'])){ 
                $MaTuyen = $_POST['tuyenxe'];
                $sql = "SELECT GiaVe FROM TuyenXe WHERE MaTuyen='{$MaTuyen}'";
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['GiaVe'] = $row['GiaVe'];
                    echo $row['GiaVe'].' đồng'; 
                }
                }
                ?>
                    </h1>
                <form method="post">
                <button type="submit" name="ThanhToan" class="btn btn-primary">Thanh toán</button>
                </form>
                <?php
                    if(isset($_POST['ThanhToan'])) {
                        $MaKH = $_SESSION['userInf']['MaKH'];
                        $ThoiGian = date("h:i:s");
                        $sql = "SELECT SoDu FROM TheXeBuyt WHERE MaKH = '{$MaKH}'";
                        $result = mysqli_query($conn,$sql);
                        if ($result != null){
                            $row = mysqli_fetch_assoc($result);
                            $SoDu = $row['SoDu'] - $_SESSION['GiaVe'];
                            if ($SoDu > 0) {
                            $sql = "UPDATE TheXeBuyt SET SoDu = '{$SoDu}'";
                            mysqli_query($conn, $sql);
                            $sql = "INSERT INTO VeThuong(MaTuyen, MaKH, ThoiGian, TrangThai) VALUES ('{$MaTuyen}','{$MaKH}','{$ThoiGian}',1)";
                                if (mysqli_query($conn, $sql)) {
                                    echo "Mua vé thành công";
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            } else {
                            echo "Không đủ tiền để thanh toán";
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                ?>
            </div>
        </div>
        <div class="tab-pane fade show active" id="MuaVeThang" style ="display:none;">
            <?php include("view/user/muaVe/veThang.php");?>
        </div>
    </div>
    </div>
    <hr>
    <?php include("view/layouts/footer.php");?>
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