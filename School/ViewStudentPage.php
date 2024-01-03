                <?php

                        session_start();
                        $user_id = $_SESSION['user_id'];
                        $Name =  $_SESSION['Name'];
                        $Father_Name = $_SESSION['Father_Name'];
                        $Mother_Name =   $_SESSION['Mother_Name'] ;
                        $DOB = $_SESSION['DOB'];
                        $NID = $_SESSION['NID'];
                        $Contact = $_SESSION['Contact'];
                        $GuardianContact = $_SESSION['GuardianContact'];
                        $Address = $_SESSION['Address'];
                        $DeptID = $_SESSION['DeptID'];
                        $Class = $_SESSION['Class'];
                        $Section = $_SESSION['Section'];
                        $Roll = $_SESSION['Roll'];
                        $Fees = $_SESSION['Fees'];
                        $Weaver = $_SESSION['Weaver'];

                ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentView Page</title>
    <!-- css link -->
    <link rel="stylesheet" href="Css/ViewStudentPage.css">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }
    .main-box {
        position: relative;
        background: url(images/b2.jpg) right no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;

    }
    .page.ps-2.pt-3 {
      width: 560px;
      height: 510px;
  }    
  .page{
        width: 400px;
    height: 323px;
    color: #fff;
    
    
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
        <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary pt-1 pb-1"
            data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3 class="fw-bold">
          <div class="img">
            <div class="school-img1 d-flex justify-content-center">
              <img src="images/U.jpg" alt="">
              <span class="fw-bold pt-2 ps-2">UCMS</span>
            </div>
           
          </div> </h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                                
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="StudentPage.php">Student</a></li> 
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    </header>


    <!-- main page er design -->
    <main>
        <div class="main-box  justify-content-center">

            <div class="tableView">
                <h1 class="text-white bg-dark text-center">Details</h1>

                <div class="page ps-2 pt-3">

                    <p>Name :<?php echo $Name ; ?></p>
                    <p>Father's Name: <?php echo $Father_Name; ?> </p>
                    <p>Mother's Name: <?php echo $Mother_Name; ?></p>
                    <p>DOB : <?php echo $DOB; ?></p>
                    <p>NID :<?php echo $NID; ?></p>
                    <p>Contact :<?php echo $Contact; ?></p>
                    <p>GuardianContact :<?php echo $GuardianContact; ?></p>
                    <p>Address : <?php echo $Address; ?></p>
                    <p>Class:<?php echo $Class; ?></p>
                    <p>Section: <?php echo $Section;?></p>
                    <p>Roll: <?php echo $Roll; ?></p>
                    <p>Fees: <?php echo $Fees; ?></p>
                    <p>Weaver: <?php echo $Weaver; ?></p>

                </div>

            </div>

        </div>

    </main>





    <!-- Bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


</body>

</html>