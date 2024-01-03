<?php

            session_start();
               

            $conn = new mysqli('localhost','root','','ucms');

            if(!$conn){
            echo "Not Connected";
            }

            


          if(isset($_POST['View'])){
            $query = $conn->query($sql);


          $ID = $_POST['ID'];

          $sql = "SELECT * FROM teacher WHERE  ID = '$ID' ;" ;
            

          $query = mysqli_query($conn,$sql);
          while ( $data = $query->fetch_assoc()) {
              $ViewID =  $data['ID'];
              $ViewDept_ID = $data['Dept_ID'];
              $ViewName = $data['Name'];
              $ViewAddress = $data['Address'];
              $ViewContact = $data['Contact'];
              $ViewDesignation = $data['Designation'];
              $ViewContact = $data['Contact'];
              $ViewJoining_Date = $data['Joining_Date'];
              $Salary = $data['Salary'];
                   echo $ID;
            


          }


          }


?>

<?php 
          
           $conn = new mysqli('localhost','root','','ucms');

            if(!$conn){
            echo "Not Connected";
            }
            
          if (isset($_POST['Insert'])) {

             $ID = $_POST['ID'];
             $Name = $_POST['Name'];
             $Address = $_POST['Address'];
             $Dept_ID = $_POST['Dept_ID'];
             $Contact = $_POST['Contact'];
             $Designation = $_POST['Designation'];
             $Joining_Date = $_POST['Joining_Date'];
             $Salary = $_POST['Salary'];


            
      
              $sql = "INSERT INTO teacher(ID, Dept_ID, Name, Address,Contact,Designation,Joining_Date,Salary )
                 values( '$ID','$Dept_ID' ,'$Name' ,'$Address','$Contact','$Designation','$Joining_Date','$Salary')";
            
               $query = mysqli_query($conn, $sql);
            
            }
            
      
      ?>

      <?php
                $conn = new mysqli('localhost','root','','ucms');

                if(!$conn){
                echo "Not Connected";
                }

         
              if (isset($_POST['Update'])) {

                $ID = $_POST['ID'];
                $Department = $_POST['Dept_ID'];
                $Name = $_POST['Name'];
                $Address = $_POST['Address'];
                $Contact = $_POST['Contact'];
                $Designation = $_POST['Designation'];
                $Joining_Date = $_POST['Joining_Date'];
                $Salary = $_POST['Salary'];


            $s = "UPDATE `teacher` SET `ID`='$ID',`Dept_ID`='$Department',`Name`='$Name',`Address`='$Address',`Contact`='$Contact',`Designation`='$Designation',`Joining_Date`='$Joining_Date',`Salary`='$Salary' WHERE 1";


            $s1 = mysqli_query($conn,$s);

                }

          
        ?>

        <?php
            $conn = new mysqli('localhost','root','','ucms');

            if(!$conn){
            echo "Not Connected";
            }
              
            if(isset($_POST['Drop'])){
              $ID = $_POST['ID'];
              

              $sql1 = "DELETE FROM `teacher` WHERE id = '$ID' ;";

              $query = mysqli_query($conn, $sql1);

            } 


        

        ?>


          <?php
                $conn = new mysqli('localhost','root','','ucms');

                if(!$conn){
                  echo "Not Connected!";
                }
 
                if(isset($_POST['view'])){
 
           
                  $ID = $_POST['ID'];
                  $Dept_ID = $_POST['Dept_ID'];
                  $Name = $_POST['Name'];
                  $Address = $_POST['Address'];
                  $Contact = $_POST['Contact'];
                  $Designation = $_POST['Designation'];
                  $Joining_Date = $_POST['Joining_Date'];
                  $Salary = $_POST['Salary'];
                  
               
                  $sql = "SELECT* FROM  teacher WHERE  ID = '$ID' " ;
   
                  $query = $conn->query($sql);
          
          
              
                  if ($query->num_rows> 0) {
                      $data = mysqli_fetch_assoc($query);
                      $_SESSION['ID'] = $ID;
                      $_SESSION['Dept_ID'] = $Dept_ID ;
                      $_SESSION['Name'] = $Name;
                      $_SESSION['Address'] = $Address;
                      $_SESSION['Contact'] = $Contact;
                      $_SESSION['Designation'] = $Designation;
                      $_SESSION['Joining_Date'] = $Joining_Date;
                      $_SESSION['Salary'] = $Salary;
                          
                       echo "<script>window.location.href='TeacherViewPage.php'</script>"  ; 
                 
                  }else{
                     
                   echo 'error';
                  }
 
                }



          ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Page</title>
  <link rel="stylesheet" href="Css/TeacherPage2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <style>
                  .school-img1 img{
              width: 45px;
              height: 40px;
                    border-radius: 35px;
                }
                .navbar-nav {
                margin-left: 970px;
                }

                ul.dropdown-menu.show {
                          position: relative;
                          left: -71px;
                      }
                    .main-box{
                        position: relative;
                        background: url(images/b2.jpg) ; 
                        background-size: cover;
                        height: 90vh;
                        width: 100%;
                
                    }
                    h3 {
                    color: white;
                }

                    label.form-label {
                        color: #fff;
                    }
                    input.btn.solid {
                background-color: beige;
                font-weight: bold;
            }

                    .tableView {
                margin-top: 60px;
                /* height: 300px; */
                padding-right: 158px;
                padding-top: 27px;
                overflow-y: scroll;
                position: relative;
                float: right;
                /* top: -500px; */
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
          <ul class="navbar-nav  mb-2 mb-lg-0 fw-semibold">
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
                
                
                <!-- <li><a class="dropdown-item" href="adminLogin.php">Log-Out</a></li> -->
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>
   
  </header>


<!-- main page er design -->
  <main>
 
    <div class="main-box  justify-content-between ">

    <form action="TeacherPage.php" method="post">
          <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="text" name="ID"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required >

            <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Dept_ID</label>
            <input type="text"  name="Dept_ID" class="form-control" id="exampleInputPassword1">
          </div>
            
          </div>
          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text"  name="Name" class="form-control" id="exampleInputPassword1">
          </div>
         
          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text"  name="Address" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Contact</label>
            <input type="text"  name="Contact" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Designation</label>
            <input type="text"  name="Designation" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Joining_Date</label>
            <input type="date"  name="Joining_Date" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Salary</label>
            <input type="text"  name="Salary" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="d-flex justify-content-around p-3 w-75 p-3" >
        <button class="btn btn-dark me-2" name="Insert">Insert</button>
        
        <button class="btn btn-dark me-2" name="Update">Update</button>
        
        <button class="btn btn-dark me-2" name="Drop">Drop</button>
        <button class="btn btn-dark" name="view">View</button>
      </div>

          
          <!-- <input type="submit" name="Insert" value="Insert" class="btn solid">
          <input type="submit" name="Update" value="Update" class="btn solid">
          <input type="submit" name="Drop" value="Drop" class="btn solid"> -->

         
    </form>

   



    <div class="view">
              <?php
                      $conn = new mysqli('localhost','root','','ucms');

                      if(!$conn){
                      echo "Not Connected!";
                      }



                  if (isset($_POST['ID']) ) {
                      $ID = $_POST['ID'];
                  
                      

                      $sql = "SELECT* FROM teacher WHERE  ID = '$ID' ";
              
                      $query = $conn->query($sql);
              
              
                  
                      if ($query->num_rows> 0) {
                          $data = mysqli_fetch_assoc($query);

                          
                          $user_id = $data['ID'];
                          $Dept_ID  = $data['Dept_ID '];
                          $Name = $data['Name'];
                          $Address = $data['Address'];
                          $Contact = $data['Contact'];
                          $Designation = $data['Designation'];
                          $Joining_Date = $data['Joining_Date'];
                          $Address = $data['Address'];
                          $Salary = $data['Salary'];
                          
                          
                          
                          $_SESSION['user_id'] = $user_id;
                          $_SESSION['Dept_ID'] = $Dept_ID;
                          $_SESSION['Name'] = $Name;
                          $_SESSION['Address'] = $Address;
                          $_SESSION['Contact'] = $Contact;
                          $_SESSION['Designation'] = $Designation;
                          $_SESSION['Joining_Date'] = $Joining_Date;
                          $_SESSION['Salary'] = $Salary;
                          

                          echo "<script>window.location.href='TeacherViewPage.php'</script>"  ;  
                          
                          // header("location:details.php");
                  
                      }else{
                      
                      echo 'error';
                      }
                  }


              ?>

        </div>
    <div class="tableView">
          
          <table class="table table-dark table-hover  border-black">
             <thead>
               
              
             </thead>
             <tbody>
               <?php
                       $conn = new mysqli('localhost','root','','ucms');
 
                       if(!$conn){
                       echo "Not Connected";
                       }
                     
                     
                     $sql = "SELECT 
                     ID	,
                     Name	,
                     Address,	
                     Contact	,
                     Designation
                       FROM teacher where 1";
                     $result = $conn->query($sql);
                 
                     if ($result->num_rows > 0) {
                       echo "<h3 style='text-align:center  ; margin-top:15px'>Teacher</h3>";
                      
                        
                         
                     
                       echo "<table border='1' class = 'table table-success' ;><tr><th> ID </th> <th>Name</th> <th>Address</th> <th>Contact</th> <th>Designation</th> </tr>";
                       while ( $data = $result->fetch_assoc()) {
                       $TeacherId = $data['ID'];   
                       $Teacher_Name = $data['Name'];
                       $Teacher_Address = $data['Address'];
                       $Teacher_Contact = $data['Contact'];
                       $Teacher_Designation = $data['Designation'];
                     
                       
                   
                 
                       echo "<tr>
                           
                               <td> $TeacherId</td> 
                               <td> $Teacher_Name</td>  
                               <td> $Teacher_Address</td>  
                               <td> $Teacher_Contact</td>  
                               <td> $Teacher_Designation</td>  
                               
                       
                           </tr>";
                       
                       }
                       echo "</table>"; 
                 } 
                     
                     
 
 
 
              ?>
             </tbody>
         </table> 
 
      
 
 
        </div>
    </div>


      


      
       <!-- table design -->
  

 
     

    </div>

  </main>

  



  <!-- Bootstrap js file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  

</body>

</html>