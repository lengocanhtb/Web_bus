<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="jquery.dataTables.min.css">
    <link rel="stylesheet" href="datagrid.css">
    
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css">
    
    .bg1 {
      background-image: url("view/images/bg1.jpg");
    }
    
  </style>
  <script>
      function changeBus1() {
      document.getElementById('ViewBus').style.display='none';
      document.getElementById('ThemBus').style.display='block';
      }
      function changeBus2() {
      document.getElementById('ViewBus').style.display='block';
      document.getElementById('ThemBus').style.display='none';
      }
  </script>
</head>
<body>
    <!-- Header -->
    <header class="p-3 bg1 text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php?page=admin" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <abbr title="Trang chủ" style="border: none; cursor: pointer;"><img src="view/images/logo.png" alt="logo" width="100" height="50" /></abbr>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php?page=admin" class="nav-link px-2 text-white"><i class="fas fa-home" color="white"></i> Trang chủ</a></li>
                <li><a href="#" class="nav-link px-2 text-white"><i class="fas fa-comments-dollar" color="white"></i> Góp ý</a></li>
                <li><a href="#" class="nav-link px-2 text-white"><i class="fas fa-info" color="white"></i> About</a></li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <ul class="nav nav-pills navbar-right">
            <li>
              <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION['adminInf']['HoTen'];?></a></li>
            <li>
              <a href="index.php" class="btn btn-primary"><i class="glyphicon glyphicon-log-in"></i>Đăng xuất</a>
            </li>
            </ul>
          </div>
        </div>
      </header>
    <hr>
