<!-- Header -->
 <header class="p-3 bg-dark text-white" style = "background-image: url('view/images/bg1.jpg');" >
     <div class="container">
       <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
         <a href="index.php?page=user" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
             <abbr title="Trang chu" style="border: none; cursor: pointer;"><img src="view/images/logo.png" alt="logo" width="70" heigh="33" /></abbr>
         </a>
 
         <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
             <li><a href="index.php?page=user" class="nav-link px-2 text-white"><i class="fas fa-home" color="white"></i> Trang chủ</a></li>
             <li><a href="index.php?page=userviewbus" class="nav-link px-2 text-white"><i class="fas fa-bus" color="white"></i> Tuyến xe</a></li>
             <li><a href="index.php?page=buyticket" class="nav-link px-2 text-white"><i class="fas fa-money-bill-wave" color="white"></i>Mua vé</a></li>
             <li><a href="#" class="nav-link px-2 text-white"><i class="fas fa-phone" color="white"></i> Hỗ trợ</a></li>
             <li><a href="#" class="nav-link px-2 text-white"><i class="fas fa-comments-dollar" color="white"></i> Góp ý</a></li>
             <li><a href="#" class="nav-link px-2 text-white"><i class="fas fa-info" color="white"></i> About</a></li>
         </ul>
 
         <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
           <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
         </form>
         
         <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
             <li><a href="index.php?page=profile" class="nav-link px-2 text-white"><?php echo $_SESSION['userInf']['HoTen'];?></a></li>
             <li><a href="index.php?page=quanlythe" class="nav-link px-2 text-white">Quản lý thẻ</a></li>
             <li><a href="index.php" class="nav-link px-2 text-white">Đăng xuất  </a></li>              
         </ul>
       </div>
     </div>
   </header>
 <hr>