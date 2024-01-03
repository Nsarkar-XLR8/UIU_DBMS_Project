<?php
          session_start();
          $Your_Name = $_SESSION['name'];
          $Email = $_SESSION['email'];
          $Subject = $_SESSION['subject'];
          $AreaText = $_SESSION['AreaText'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Comment</title>

<!-- css link -->
    <link rel="stylesheet" href="Css/ViewComment.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .main-box{
        position: relative;
        background: url(images/extra.jpg) right no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
     
    }
    ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }
    </style>



</head>
<body class="">

    <header>
        <!-- nav bar  -->
        <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary pt-1 pb-1" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand text-white " href="#"><h3>Modern <span class="fw-bold">School</span></h3></a>
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
                    <li><a href="admindashBoard.php" class="dropdown-item text-secondary">
                        Dashboard </a></li>
                    <!-- <li><a class="dropdown-item" href="#">Log-Out</a></li> -->
                    <!-- <li>
                      <hr class="dropdown-divider ">
                    </li>
                    <li><a class="dropdown-item text-white-50 bg-dark " href="#">Log-Out</a></li> -->
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
            <!-- <div class="search mb-3">
              <input class="btn btn-dark" type="submit" value="search">
              <input type="search " name="" id="">
            </div> -->
            
              <div class="page ps-2 pt-3">
              
              <p>Name         : <?php echo  $_SESSION['name']; ?>    </p>
              <p>Email        : <?php echo  $_SESSION['email']; ?>    </p>
              <p>Subject      : <?php echo $_SESSION['subject']; ?>  </p>
              <p>Comment      :  <?php echo $_SESSION['AreaText']; ?>   </p>
              

              </div>

        </div>
        
    </div>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>