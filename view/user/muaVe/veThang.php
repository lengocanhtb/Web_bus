<?php require 'controller/user/muave/VeThangController.php';?>
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
     <script>
      function changeMuaVeThang1() {
      document.getElementById('MuaLienTuyen').style.display='none';
      document.getElementById('MuaMotTuyen').style.display='block';
      }
      function changeMuaVeThang2() {
      document.getElementById('MuaLienTuyen').style.display='block';
      document.getElementById('MuaMotTuyen').style.display='none';
      }
  </script>
</head>

<body>
    <?php include("view/layouts/user-header.php"); ?>
    <!-- Mua ve -->
    <div class="d-flex align-items-start" style="width: 100%">
    <div class="nav flex-column nav-pills me-3"  role="tablist" >
        <button class="nav-link " data-bs-toggle="pill"  type="button" role="tab"> <a href = index.php?<?php echo "page=muaVeThuong";?>>Mua vé thường</a></button>
        <button class="nav-link active" data-bs-toggle="pill"  type="button" role="tab"><a href = index.php?<?php echo "page=muaVeThang";?>  class="link-light">Mua vé tháng</a></button>
    </div>
    <div class="flex-fill tab-content">        
        <div class="tab-pane fade show active" id="MuaVeThang">
        <div>
            <div style="width: 40%; float:left">
                <legend><h1>Mua vé tháng</h1></legend>
                    <div class="mb-3">   
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="changeMuaVeThang1()">Một tuyến</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="changeMuaVeThang2()">Liên tuyến</button>
                            </li>
                        </ul>
                    <div class="tab-content" id="pills-tabContent">
                <!-- // một tuyến -->
                <div class="tab-pane fade show active" id="MuaMotTuyen" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form method = "post">
                    <label for="Select" class="form-label">Chọn tuyến xe</label>
                    <select name ="tuyenxe" class="form-select">
                        <?php 
                                foreach($buses as $bus) {
                                $MaTuyen = $bus['MaTuyen'];
                        ?>
                            <option value="<?php echo $MaTuyen?>"><?php echo $MaTuyen?></option>";
                        <?php
                                }
                        ?>
                    </select>
                    <label for="Select" class="form-label">Tháng</label>
                    <select name="Thang" class = "form-select">
                        <?php for($i=1;$i<=12; $i++){?>
                            <option value="<?php echo $i; ?>"> Tháng <?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <br></br>
                    <button type="submit" name="MuaMotTuyen" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- // liên tuyến -->
                <div class="tab-pane fade show active" id="MuaLienTuyen" role="tabpanel" aria-labelledby="pills-profile-tab" style = "display:none">
                    <form method = "post">
                    <label for="Select" class="form-label">Tháng</label>
                    <select name="Thang" class = "form-select">
                        <?php for($i=1;$i<=12; $i++){?>
                            <option value="<?php echo $i; ?>"> Tháng <?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <br></br>
                    <button type="submit" name="MuaLienTuyen" class="btn btn-primary">Submit</button>
                    </form>                               
                </div>
            </div>
        </div>
    </div>
    <div style="width: 50%; float:right">
        <h1>Giá vé: 
            <?php
            echo $GiaVe.' đồng';
            ?>
        </h1>
        <form method="post">
    <button type="submit" name="ThanhToan2" class="btn btn-primary" onclick="changeMuaVeThang()">Thanh toán</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <?php include("view/layouts/footer.php");?>
</body>
</html>



