<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminRegister</title>
    <link rel="stylesheet" href="Css/adminLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

</head>
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
                <a class="nav-link active " aria-current="page" href="#"> <a href="index.php"> <span class="home text-white-50">Home</span></a> </a>
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
<!-- registration design -->
        <div class="wrapped">
            <form action="adminRegister.php" method ="post"  >
                <h1 class="Login fw-bold">Registration</h1>
                <div class="input-box">
                    <input type="text" placeholder="UserName" name="name"  required> 
                    <i class='bx bxs-user-account'></i>                </div>
                    <div class="input-box">
                        <input type="email" placeholder="EmailAddress" name="email"  required> 
                        <i class='bx bxs-envelope'></i>               </div>
                <div class="input-box">
                    <input type="password" placeholder="password" name="Password"  required> 
                    <i class='bx bxs-lock'></i>
                </div>
                <div class="remember-forget">
                    <label for=""><input type="checkbox">I agree to the term & conditions</label>
                    <!-- <a href="#">Forget password? </a> -->

                </div>
                <input type="submit" name="submit" value="submit" class="btn solid">
                <div class="register-link">
                    <p>Already have an account?<a href="adminLogin.php">Login</a> </p>

                </div>

            </form>

            <?php


                $conn = new mysqli('localhost','root','','ucms');

                if(!$conn){
                echo "Not Connected";
                }

                  
                if (isset($_POST['submit'])) {
                   $name = $_POST['name'];
                   $email = $_POST['email'];
                   $Password = $_POST['Password'];
                  

                  
                   $sql = "INSERT INTO usersettings (UserName,Email,Password)
                    values( '$name' ,'$email' ,'$Password')";
                  
                    $query = mysqli_query($conn, $sql);
                  
                   $alert = "<script>alert('Signup Successfully')</script>";
                    echo $alert;
                   
                   
                  }

          ?>


        </div>
    </main>


















    <!-- js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>