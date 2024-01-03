<?php

session_start();
$user_id = $_SESSION['user_id'];
$Dept_ID =  $_SESSION['Dept_ID'];
$Name = $_SESSION['Name'];
$Address =   $_SESSION['Address'] ;
$Contact = $_SESSION['Contact'];
$Designation = $_SESSION['Designation'];
$Joining_Date = $_SESSION['Joining_Date'];
$WorkingDays = $_SESSION['WorkingDays'];
$Salary = $_SESSION['Salary'];
$Allawence = $_SESSION['Allawence'];
$LeaveOfAbsence = $_SESSION['LeaveOfAbsence'];
$ManagerID = $_SESSION['ManagerID'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Staff</title>

<!-- css link -->
    <link rel="stylesheet" href="Css/ViewStaff.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .main-box{
        position: relative;
        background: url(images/b2.jpg) right no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
     
    }
    .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }
    ul.dropdown-menu.show {
              position: relative;
              left: -80px;
          }
          .page {
    padding-left: 53px;
    width: 776px;
    height: 500px;
    border: 2px solid black;
    background: rgb(255 ,225,225,0.5);
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
                  <a class="nav-link active text-white" aria-current="page" href="index.php"> Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-secondary" href="ContactPage.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    More
                  </a>
                  <ul class="dropdown-menu text-white-50 bg-dark">
                    <li><a class="dropdown-item text-secondary" href="admindashBoard.php">
                        Dashboard </a></li>
                    <!-- <li><a class="dropdown-item" href="#">Log-Out</a></li> -->
                    <li>
                      <hr class="dropdown-divider ">
                    </li>
                    <li><a class="dropdown-item text-white-50 bg-dark " href="StaffPage.php">Staff</a></li>
                  </ul>
                </li>
    
              </ul>
    
            </div>
          </div>
        </nav>
       
      </header>
   


    <div class="main-box">
        


        <!-- table design -->
        <div class="tableView">
            <h1 class="text-white text-center bg-dark">Details</h1>
            
              <div class="page  pt-5">
              
              <p>ID             : <?php echo  $user_id ;?>   </p>
             
              <p>Name           :  <?php echo $Name; ?> </p>
              <p>Address        :  <?php echo $Address; ?>  </p>
              <p>Contact        : <?php echo $Contact; ?>  </p>
              <p>Designation    : <?php echo $Designation  ?>  </p>
              <p>Joining_Date   : <?php echo $Joining_Date ?>  </p>
              <p>WorkingDays    : <?php echo $WorkingDays  ?>  </p>
              <p> Salary        : <?php echo $Salary  ?>  </p>
              
              <p>LeaveOfAbsence :  <?php echo $LeaveOfAbsence  ?> </p>
              
              <p>ManagerID      : <?php echo $ManagerID  ?>  </p>
              </div>

        </div>
        
    </div>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>