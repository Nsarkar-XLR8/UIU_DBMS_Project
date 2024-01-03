<?php

session_start();

$ID = $_SESSION['user_id'];
$Dept_ID =  $_SESSION['Dept_ID'];
$Name = $_SESSION['Name'];
$Address =   $_SESSION['Address'] ;
$Contact = $_SESSION['Contact'];
$Designation = $_SESSION['Designation'];
$Joining_Date = $_SESSION['Joining_Date'];
$Salary = $_SESSION['Salary'];



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher-View-Page</title>
  <!-- css link -->
  <link rel="stylesheet" href="Css/TeacherViewPage.css">
  <!-- bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
      .main-box{
        position: relative;
        background: url(images/b2.jpg) right no-repeat;
        background-size: cover;
        height: 90vh;
        width: 100%;
     
    }
    ul.dropdown-menu.show {
              position: relative;
              left: -78px;
          }
          .page {
            padding-left: 157px;
            padding-top: 53px;
    width: 604px;
    height: 350px;
    border: 2px solid black;
    background: rgb(255 ,225,225,0.5);
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
    <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary pt-1 pb-1" data-bs-theme="dark">
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
              <a class="nav-link active" aria-current="page" href="index.php"> Home</a>
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
                <li><a class="dropdown-item">
                    <a class="dropdownItem" href="admindashBoard.php">Dashboard</a> </a></li>
                <!-- <li><a class="dropdown-item" href="#">Log-Out</a></li> -->
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="TeacherPage.php">Teacher</a></li>
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>
   
  </header>


<!-- main page er design -->
  <main class="main-box">
   <!-- details -->
   <div class="tableView">
    <h1 class="text-center bg-dark text-white">Details</h1>
    <!-- <div class="search mb-3">
      <input class="btn btn-dark" type="submit" value="search">
      <input type="search " name="" id="">
    </div> -->
    
      <div class="page  ">
      <p>ID           :<?php echo $ID; ?>  </p>
      
      <p>Name         :<?php echo $Name; ?></p>  
      <p>Address      :<?php echo $Address; ?></p>
      <p>Contact      :<?php echo $Contact; ?></p>
      <p>Designation  :<?php echo $Designation; ?></p>
      <p>Joining Date :<?php echo $Joining_Date; ?></p>
      <p>Salary       :<?php echo $Salary; ?></p>
      
      
      </div>

</div>

  </main>

  



  <!-- Bootstrap js file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  

</body>

</html>