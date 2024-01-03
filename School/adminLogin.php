<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminLogin</title>
    <link rel="stylesheet" href="Css/adminLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

      <style>
            ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }
          .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }
    
      </style>
<body class="">
    <header>
        <!-- nav bar -->
        <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3 class="fw-bold">
          <div class="img">
            <div class="school-img1 d-flex justify-content-center">
              <img src="images/U.jpg" alt="">
              <span class="fw-bold pt-2 ps-2">UCMS</span>
            </div>
           
          </div> </h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="index.php"> Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ContactPage.php">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="admin.php">Admin</a></li>
                  <li><a class="dropdown-item" href="Canteen.php">Canteen</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="Library.php">Library</a></li>
                </ul>
              </li>
              
            </ul>
  
          </div>
        </div>
      </nav>

      
    </header>
    <main>

        <div class="wrapped">
            <form action="" method= "post">
              <h1 class="Login fw-bold">Login</h1>
              <div class="input-box">
                  <input type="text" placeholder="UserName" name="Email" required> 
                  <i class='bx bxs-user-account'></i>                </div>
              <div class="input-box">
                  <input type="password" placeholder="password" name="Password" required> 
                  
                  <i class='bx bxs-lock'></i>
              </div>
              <div class="remember-forget">
                <label for=""><input type="checkbox">Remember Me</label>
                <a href="#">Forget password? </a>
              </div>
              <button type="submit" class="btn">Login</button>

             
              
              
              <?php
                   
                   $conn = new mysqli('localhost', 'root', '', 'ucms');
                   if (!$conn) {
                       echo 'not connect';
                   }
                  
                   if (isset($_POST['Email']) && isset($_POST['Password'])   ) {
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];

                    $sql = "SELECT* FROM usersettings WHERE  Password = '$Password' " ;
            
                    $query = $conn->query($sql);
            
            
                
                    if ($query->num_rows> 0) {
                        $data = mysqli_fetch_assoc($query);

                        header("location:admindashBoard.php");
                   
                    }else{
                       
                        echo "Wrong Password";
                    }
                   }
            
            
            ?>



              <div class="register-link">
              <p>Don't have an account?<a href="adminRegister.php">Register</a> </p>
              </div>

            </form>

            
              
        </div>
    </main>


















    <!-- js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>