<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class-Room</title>
  <!-- css link -->
  <link rel="stylesheet" href="Css/department..css">
  <!-- bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      ul.dropdown-menu.show {
              position: relative;
              left: -80px;
          }
      .main-box{
        position: relative;
        background: url(images/extra.jpg) right no-repeat;
        background-size: cover;
        height: 92vh;
        width: 100%;
     
    }
    .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }

          .table1 {
          overflow: auto;
      }
      a.navbar-brand {
    padding-right: 884px;
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
                  <li><a class="dropdown-item" href="admindashBoard.php">Dashboard</a></li>
                  <!-- <li><a class="dropdown-item" href="Canteen.php">Canteen</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="Library.php">Library</a></li> -->
                  
                </ul>
              </li>
              
            </ul>
  
          </div>
        </div>
      </nav>

      
    </header>


<!-- main page er design -->
  <main>
    <div class="main-box d-flex justify-content-evenly ">
         <div class="table1">
        
            <table class="table table-hover"> 
         <thead>

                     <tr>
                       
                        <th style="text-align: center" colspan="3"><span class="subj text-black">ClassRoom</span></th>
                    </tr>
                  <tr>
                    
                    <th scope="col">Room</th>
                    <th scope="col">Capacity</th>
                    
                   
                  </tr>
                </thead>
                <tbody>


                <?php

                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                    echo "Not Connected";
                    }

                    $s = "SELECT * FROM `classroom` WHERE 1 ORDER BY Room";

                    $result = mysqli_query($conn,$s);

                    while($row = mysqli_fetch_array($result)){

                      ?>

                      <tr>
                        <td scope="col"><?php  echo $row["Room"]   ?></td>

                        <td scope="col"><?php  echo $row["Capacity"]   ?></td>


                      </tr>



    <?php } ?>     



                 
     
      


                </tbody>
              </table>


              



        </div> 
 

       
        <div class="table2">
            <table class="table table-hover">
        
                <thead>
                    <tr>
                       
                        <th style="text-align: center" colspan="6"><span class="subj text-black">Department</span></th>
                    </tr>

                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Department-Name</th>
                    <th scope="col">Subject</th>
                    
                    
                  </tr>
                  
                </thead>
                <tbody>
                <?php
                                $s="SELECT * FROM `department` WHERE 1 ORDER BY ID";
                                $result = mysqli_query($conn,$s);
                                while($row = mysqli_fetch_array($result)){
                                ?>

                  <tr>
                   
                    <td scope="col"><?php echo$row['ID']  ?></td>
                    <td scope="col"><?php echo$row['DeptName']  ?></td>
                    <td scope="col"><?php echo$row['AmountOfSubjects']  ?></td>
                    
                    
                  </tr>
<?php } ?>
                  
                 
                </tbody>
              </table>
        </div>
     </div>

  </main>

  



  <!-- Bootstrap js file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  

</body>

</html>