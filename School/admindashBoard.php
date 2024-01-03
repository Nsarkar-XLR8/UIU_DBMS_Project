<?php
            $username = "admin";

            $password ="admin";

            session_start();

            if(isset($_SESSION['username'])){
            echo "<h3>" . $_SESSION['username'] . "</h3>";

            
            if(!($_POST['username']==$username) && !($_POST['password']==$password)){
            $_SESSION['username']=$username;
            echo "<script>alert('Username or password Incorrect!')</script>";
                }
            }
      

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>


    <link rel="stylesheet" href="Css/Dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<style>
  .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }
 
  ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }

.main-box{
    position: relative;
    background: url(images/b2.jpg) right no-repeat;
    background-size: cover;
    height: 88vh;
    width: 100%;
 
}
.sidebar-menu .menu li {
    /* margin-top: 6px; */
    /* padding: 14px 20px; */
    padding-left: 0;
  
    transition: all 0.3s linear;
}


</style>


<style>


.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: transparent;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
    width:200px;
}
.cards {
    padding-top: 170px;
    padding-left: 536px;
    padding-right: 360px;
}
.card-body {
    background: #0000004d;
}
</style>

<style>

.row {
    padding-left: -50px;
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    
    margin-top: calc(var(--bs-gutter-y) * -6);
    margin-right: calc(var(--bs-gutter-x) * 0);
    margin-left: calc(var(--bs-gutter-x) * -6);
}

</style>


</head>
<body >
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
        <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 fw-semibold">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php">  Home </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white-50 bg-dark" href="ContactPage.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white-50 bg-dark" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu bg-dark ">
              <li><a class="dropdown-item text-white-50 bg-dark" href="admin.php"><h6 class="">Admin</h6></a></li>
              <li><a class="dropdown-item text-white-50 bg-dark" href="Library.php">Library</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-white-50 bg-dark" href="Canteen.php">Canteen</a></li>
            </ul>
          </li>
          
        </ul>

      </div>
    </div>
  </nav>

  
</header>
    <div class="main-box">
      <input type="checkbox"  id="check">
      <div class="btn_on">
       <label for="check">
        <i class="fa-solid fa-bars" style="color: #e2e4e9;"></i>
       </label>
      </div>
        <div class="sidebar-menu">
            <div class="logo">
                
                
                <a href="admin.php">Admin</a>
            </div>
            <div class="btn_two">
              <label for="check">
                <i class="fas fa-times"></i>
              </label>
            </div>
            <div class="menu">
              <ul>
                <li><a href="#">
                    <i class="fas fa-qrcode"></i>Dashboard</a></li>
                <li>
                  <!-- <a href="#">
                    <i class="fa-solid fa-chalkboard-user"></i>Teachers</a> -->
                    <a  href="TeacherPage.php">
                      <i class="fa-solid fa-chalkboard-user"></i>Teacher</a>
                  </li>
                <li>
                  <a href="StudentPage.php">
                    <i class="fa-solid fa-graduation-cap"></i>Students</a>
                    
                  </li>
                <li><a href="StaffPage.php">
                    <i class="fa-solid fa-user-tie"></i>Staff</a></li>
                <li><a href="Department.php">
                    <i class="fa-solid fa-clipboard-user"></i> Department</a></li>
                    <!-- <li><a href="#">
                      <i class="fa-solid fa-building" style="color: #f3f6fb;"></i> Department</a></li> -->
                      <li><a href="subjectSection.php">
                        <i class="fa-solid fa-book-open" style="color: #e7eaee;"></i> Subject</a></li>
                        <li><a href="Library.php">
                          <i class="fa-solid fa-book" style="color: #ebedef;"></i> Library</a></li>

                      
                        
                <li><a href="ClassRoutine.php">
                    <i class="fa-solid fa-clipboard"></i>Class Routine</a></li>

                    <!-- <li>
                  <a href="QueryBox.php">
                    <i class="fa-solid fa-graduation-cap"></i>Query Box</a>
                    
                  </li> -->
                  <li><a href="ViewComment.php">
                    <i class="fas fa-qrcode"></i>Comment</a></li>
                  <li><a href="adminLogin.php">
                    <i class="fas fa-qrcode"></i>Log Out</a></li>
                
                
            </ul>
            </div>
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                
            </div>
            
        </div>
        <!-- card design -->
        <div class="cards">
            

              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card">
                    <!-- <img src="images/teacher.jpg" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Teachers</h5>
                      <!-- <h1>799</h1> -->
                      
                    <!-- <pre lang="HTML"><pre>  -->
                    <?php
                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                      echo "Not Connected!";
                    }

                    $s = "SELECT COUNT(ID)as c FROM teacher WHERE 1;";

                    // 
                    $result = mysqli_query($conn,$s);

                    if($result){

                      while($row=mysqli_fetch_assoc($result)){
                        echo "<h1>" . $row['c'] . "</h1>";
                      }
                    }

                      ?>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                   
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Staffs</h5>
                      <!-- <h1>799</h1> -->


                      <?php
                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                      echo "Not Connected!";
                    }

                    $s = "SELECT COUNT(ID)as c FROM staff WHERE 1;";

                    // 
                    $result = mysqli_query($conn,$s);

                    if($result){

                      while($row=mysqli_fetch_assoc($result)){
                        echo "<h1>" . $row['c'] . "</h1>";
                      }
                    }

                      ?>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Students</h5>
                      <!-- <h1>799</h1> -->
                      <?php
                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                      echo "Not Connected!";
                    }

                    $s = "SELECT COUNT(ID)as c FROM student WHERE 1;";

                    // 
                    $result = mysqli_query($conn,$s);

                    if($result){

                      while($row=mysqli_fetch_assoc($result)){
                        echo "<h1>" . $row['c'] . "</h1>";
                      }
                    }

                      ?>
                    </div>
                  </div>
                </div>
                
              </div>
        </div>
        
    </div>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>