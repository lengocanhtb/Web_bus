<?php
  include_once("model/User.php");
  include_once("model/Admin.php");  
  $userModel = new User();
  $adminModel = new Admin();

  // check đăng nhập User
  if (isset($_POST['LogIn'])){
    $SĐT = $_POST['SĐT'];
    $MatKhau = $_POST['MatKhau'];
    $result = $userModel->checkUser($SĐT, $MatKhau);
    if ($result->num_rows > 0) {
      ?>
      <script>
          window.alert("Đăng nhập thành công");
      </script>
      <?php
      //Lưu tên đăng nhập
      $row = $result->fetch_assoc();
      $_SESSION['userInf']=$row;
      // output data of each row
      header('Location: index.php?page=user');
    } else {
      ?>
      <script>
          window.alert("Tên tài khoản hoặc mật khẩu không chính xác");
      </script>
      <?php
    }
  }

  // check đăng nhập Admin
  if(isset($_POST['LogInAdmin'])){
    $SĐT = $_POST['SĐT'];
    $MatKhau = $_POST['MatKhau'];
    $result = $adminModel->checkAdmin($SĐT, $MatKhau);
    if ($result->num_rows > 0) {
      ?>
      <script>
          window.alert("Đăng nhập thành công");
      </script>
      <?php
      //Lưu tên đăng nhập
      $row = $result->fetch_assoc();
      $_SESSION['adminInf']=$row;
      // output data of each row
      header('Location: index.php?page=admin');
    } else {
      ?>
      <script>
          window.alert("Tên tài khoản hoặc mật khẩu không chính xác");
      </script>
      <?php
    }
  }
?>