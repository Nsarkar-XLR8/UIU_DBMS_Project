<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>

ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }
      /* a.navbar-brand {
    margin-right: 791px;
    } */
    a {
    color: white;
    }
    </style>

<style>
      .school-img img {
        width: 60px;
        border-radius: 35px;
    }
    h3.pb-3 ,.pb-2 {
    text-decoration: underline solid #f9004d;
}


      h4,p .welcome{
      font-family: 'Abril Fatface', cursive;
       font-family: 'EB Garamond', serif;
       
      }
      .footer{
        background-color:#000000 ;
        
      }
      .parent.d-flex.justify-content-around.text-white-50.bg-dark.pt-5 {
    height: 231px;
}
      .social-media {
    font-size: 33px;
}
.ucms{
  padding-top: 19px;
    padding-left: 14px;
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
       <!-- nav bar  -->
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
                  <li><a class="dropdown-item" href="#">Admin</a></li>
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

      <div class="ps-5 pb-5 pt-5">
        <h1 class="text-center fs-1">Hello , Admin</h1>
        <p class="text-center pb-5">Welcome to Modern School</p>
        <p class="text-center">You can access various features after Login/SignUp</p>

        <center>
        <button class="btn btn-dark "><a href="adminLogin.php">Login</a></button>
        </center>

     

    </header>


    <!-- footer -->
  <footer>
    <div class="parent d-flex justify-content-around text-white-50 bg-dark pt-5">
      <div class="img">
        <div class="school-img d-flex justify-content-center">
        <img src="images/U.jpg" alt="">
        <h5 class="ucms">UCMS</h5>
        </div>
        <h1>United International School</h1>   
      </div>
      <div class="contact ">
        <h3 class="pb-2">Contact</h3>
        <h6>United City, Madani Avenue, <br> Badda, Dhaka 1212, Bangladesh.
          <br>Phone: +88 03678697498</h6>
        <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook" style="color: #c5cad3;"></i></a>
                <a href="#"><i class="fa-brands fa-twitter" style="color: #ced4de;"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram" style="color: #bcc0c8;"></i></a>
                
            </div>

      </div>
      <div class="imp-link">
        <h3 class="pb-3">Important Link</h3>
        <h5><a href="">Bus Service Schedule</a></h5>
         <h5><a href="ClassRoutineView.php">Class Routine</a></h5>
      </div>
    </div>
 
  

  </footer>

    <!-- <section class=" footer ps-5 d-flex pt-5  container">
        <div class="row footers">
          <div class=" col-6 col-sm-6 col-md-3 ps-5 pe-5">
            <div class="">
              <img class="images" src="images/school-logo.jpg
              " alt="">
              
              
              </div>
               </div> 
               <div class=" col-6 col-sm-6 col-md-3">
                <div class="">
                  <h3>Usefull Link</h3>
                   <img class="image" src="images/logo1_1.jpg" alt="" srcset="">
                 </div>
               </div>
               <div class=" col-6 col-sm-6 col-md-3">
                <div class="g-5 ms-5 pe-5 ps-5">
                  <div><h3>Contact Now</h3></div>
                   <p>nsarkar203032@bscse.uiu.ac.bd</p>
                   <p>nrabbi203016@bscse.uiu.ac.bd</p>
                   <p>tifnath203055@bscse.uiu.ac.bd</p>
                   <p>asaid202332@bscse.uiu.ac.bd</p>
                 </div>
               </div>
               
          
        </div>
            </section>
        
          </footer> -->
    <!-- js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>