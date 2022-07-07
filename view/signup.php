<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>


    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
  
      
      <!-- Custom styles for this template -->
      <link href="view/css/signup.css" rel="stylesheet">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="text-center">

    <main class="form-signup">
        <form method="post">
        <a href="index.php"><abbr title="Trang chu" style="border: none; cursor: pointer;"><img class="mb-5" src="view/images/logo.png" alt="" width="150" height="70"></abbr></a>
        <h1 class="h3 mb-4 fw-normal">Enter your Phone and Password</h1>
    
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name ="HoTen" placeholder="Ho Ten">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="phoneNumber" class="form-control" id="floatingInput" name ="SĐT" placeholder="0xxxxxx">
            <label for="floatingInput">Phone Number</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name ="MatKhau1" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="cfPassword" name ="MatKhau2" placeholder="Confirm Password">
            <label for="cfPassword">Confirm Password</label>
        </div>
        
    
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="SignUp">Create an accout</button>
        <p class="mt-5 mb-4 text-muted">© 2017–2021</p>
        </form>
    </main>
     
    <div class="selection_bubble_root" style="display: none;"></div>

    <!-- Bootstrap Bundle with Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Separate Popper and Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>

    
</html>