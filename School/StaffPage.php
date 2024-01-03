<?php           
            
session_start();

if(isset($_POST['View'])){

   $query = $conn->query($sql);

       $ID = $_POST['ID'];
       
       $sql = "SELECT * FROM  student WHERE  ID = '$ID' " ;
       $query = mysqli_query($conn,$s);
       while ( $data = $query->fetch_assoc()) {
           $ViewID =  $data['ID']+1;
           $ViewDept_ID  = $data['Dept_ID '];
           $ViewName = $data['Name'];
           $ViewAddress = $data['Address'];
           $ViewContact = $data['Contact'];
           $ViewDesignation = $data['Designation'];
           $ViewJoining_Date = $data['Joining_Date'];
           $ViewWorkingDays = $data['WorkingDays'];
           $ViewSalary = $data['Salary'];
           $ViewAllawence = $data['Allawence'];
           $ViewLeaveOfAbsence = $data['LeaveOfAbsence'];
           $ViewManagerID = $data['ManagerID'];
            
       }


   }




?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <!-- css link -->
    <link rel="stylesheet" href="Css/staffPage.css">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>

.details {
    overflow-y: scroll;
    margin-top: 28px;
    margin-bottom: 25px;
}
        

    .main-box {
        position: relative;
        background: url(images/b2.jpg) right no-repeat;
        background-size: cover;
        height: 92vh;
        width: 100%;

    }

    .tableView {
       margin-right:10px;
        margin-top: 50px;
        height: 300px;
        padding-right: 330px;
        padding-top: 27px;
        overflow-y: scroll;
    }
    .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }

    .Name.col-auto {
    margin-left: 75px;
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
                            <ul class="drop dropdown-menu ">
                                <li><a class="dropdown-item">
                                        <a class="dropdownItem" href="admindashBoard.php">Dashboard</a> </a></li>
                                <!-- <li><a class="dropdown-item" href="#">Log-Out</a></li> -->
                               
                                <!-- <li><a class="dropdown-item" href=".php">Log-Out</a></li> -->
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    </header>


    <!-- main page er design -->
    <main>
        <div class="main-box  justify-content-between">

            <!-- details  -->

            <div id="info">
                <div class="details ">
                    <form action="StaffPage.php" method="post">
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" id col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">ID</label>
                            </div>

                            <div class=" ID col-auto">
                                <input type="text" name="ID" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="ID" required>
                            </div>

                            <div class="row g-3 align-items-center ">
                                <div class=" ad col-auto">
                                    <label for="inputPassword6" class="col-form-label text-white">Dept_ID</label>
                                </div>
                                <div class=" Dept-ID col-auto">
                                    <input type="text" name="Dept_ID" id="inputPassword6" class="form-control"
                                        aria-describedby="passwordHelpInline" placeholder="Dept_ID">
                                </div>


                            </div>

                            <div class="row g-3 align-items-center ">
                                <div class=" name col-auto">
                                    <label for="inputPassword6" class="col-form-label text-white">Name</label>
                                </div>
                                <div class="  Name  col-auto">
                                    <input type="text" name="Name" id="inputPassword6" class="form-control"
                                        aria-describedby="passwordHelpInline" placeholder="Name">
                                </div>


                            </div>




                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="dep col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Address</label>
                            </div>

                            <div class=" address col-auto">
                                <input type="text" name="Address" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Address">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Contact</label>
                            </div>
                            <div class="Contact col-auto">
                                <input type="text" name="Contact" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Contact">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Designation</label>
                            </div>
                            <div class=" Designation col-auto">
                                <input type="text" name="Designation" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Designation">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Joining_Date</label>
                            </div>
                            <div class=" Joining-date col-auto">
                                <input type="date" name="Joining_Date" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Joining_Date">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">WorkingDays</label>
                            </div>
                            <div class=" WorkingDays col-auto">
                                <input type="text" name="WorkingDays" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="WorkingDays">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="des col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Salary</label>
                            </div>
                            <div class=" Salary col-auto">
                                <input type="text" name="Salary" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Salary">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" join col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Allawence</label>
                            </div>
                            <div class="Allowance col-auto">
                                <input type="text" name="Allawence" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Allowance">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="sal col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">LeaveOfAbsence</label>
                            </div>
                            <div class=" LeaveOfAbsence col-auto">
                                <input type="text" name="LeaveOfAbsence" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="LeaveOfAbsence">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class="sal col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">ManagerID</label>
                            </div>
                            <div class="ManagerID col-auto">
                                <input type="text" name="ManagerID" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="ManagerID">
                            </div>


                        </div>
                        <!-- <input type="submit" name="Insert" value="Insert" class="btn solid">
  <input type="submit" name="Update" value="Update" class="btn solid">
  <input type="submit" name="Drop" value="Drop" class="btn solid"> -->
                        <div class="d-flex justify-content-around p-3 w-75 p-3">
                            <button class="btn btn-dark" name="Insert">Insert</button>

                            <button class="btn btn-dark" name="Update">Update</button>

                            <button class="btn btn-dark" name="Drop">Drop</button>

                            <button class="btn btn-dark" name="view">View</button>
                        </div>

                    </form>

                </div>

            </div>

            <?php
                     $conn = new mysqli('localhost','root','','ucms');

                     if(!$conn){
                     echo "Not Connected!";
                     }



                 if (isset($_POST['ID']) ) {
                     $ID = $_POST['ID'];
                 
                     

                     $sql = "SELECT* FROM staff WHERE  ID = '$ID' ";
             
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
                         $WorkingDays = $data['WorkingDays'];
                         $Salary = $data['Salary'];
                         $Allawence = $data['Allawence '];
                         $LeaveOfAbsence = $data['LeaveOfAbsence'];
                         $ManagerID = $data['ManagerID'];
                        
                         
                         
                         $_SESSION['user_id'] = $user_id;
                         $_SESSION['Dept_ID'] = $Dept_ID;
                         $_SESSION['Name'] = $Name;
                         $_SESSION['Address'] = $Address;
                         $_SESSION['Contact'] = $Contact;
                         $_SESSION['Designation'] = $Designation;
                         $_SESSION['Joining_Date'] = $Joining_Date;
                         $_SESSION['WorkingDays'] = $WorkingDays;
                         $_SESSION['Salary'] = $Salary;
                         $_SESSION['Allawence'] = $Allawence;
                         $_SESSION['LeaveOfAbsence'] = $LeaveOfAbsence;
                         $_SESSION['ManagerID'] = $ManagerID;
                         

                         echo "<script>window.location.href='ViewStaff.php'</script>"  ;  
                         
                         // header("location:details.php");
                 
                     }else{
                     
                     echo 'error';
                     }
                 }
            ?>
            <?php 
                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                      echo "Not Connected!";
                    }


                    if(isset($_POST['Insert'])){
                              $ID = $_POST['ID'];
                              $Dept_ID = $_POST['Dept_ID'];
                              $Name = $_POST['Name'];
                              $Address = $_POST['Address'];
                              $Contact = $_POST['Contact'];
                              $Designation = $_POST['Designation'];
                              $Joining_Date = $_POST['Joining_Date'];
                              $WorkingDays = $_POST['WorkingDays'];
                              $Salary = $_POST['Salary'];
                              $Allawence = $_POST['Allawence'];
                              $LeaveOfAbsence = $_POST['LeaveOfAbsence'];
                              $ManagerID = $_POST['ManagerID'];
                              

                              


                              $s = "INSERT INTO `staff`(`ID`, `Dept_ID`, `Name`, `Address`, `Contact`, `Designation`, `Joining_Date`, `WorkingDays`, `Salary`, `Allawence`, `LeaveOfAbsence`, `ManagerID`) VALUES ('$ID','$Dept_ID','$Name','$Address','$Contact','$Designation','$Joining_Date','$WorkingDays','$Salary','$Allawence','$LeaveOfAbsence','$ManagerID');";

                              $query = mysqli_query($conn,$s);


                    }

                    ?>

            <?php

                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                      echo "Not Connected!";
                    }
                    if(isset($_POST['Update'])){
                      $ID = $_POST['ID'];
                      $Dept_ID = $_POST['Dept_ID'];
                      $Name = $_POST['Name'];
                      $Address = $_POST['Address'];
                      $Contact = $_POST['Contact'];
                      $Designation = $_POST['Designation'];
                      $Joining_Date = $_POST['Joining_Date'];
                      $WorkingDays = $_POST['WorkingDays'];
                      $Salary = $_POST['Salary'];
                      $Allawence = $_POST['Allawence'];
                      $LeaveOfAbsence = $_POST['LeaveOfAbsence'];
                      $ManagerID = $_POST['ManagerID'];

                    $s = "UPDATE `staff` SET `ID`='$ID',`Dept_ID`='$Dept_ID',`Name`='$Name',`Address`='$Address',`Contact`='$Contact',`Designation`='$Designation',`Joining_Date`='$Joining_Date',`WorkingDays`='$WorkingDays',`Salary`='$Salary',`Allawence`='$Allawence',`LeaveOfAbsence`='$LeaveOfAbsence',`ManagerID`='$ManagerID' WHERE 1;";

                    $query = mysqli_query($conn,$s);



                    }
                    


                    ?>


            <?php

                    if(isset($_POST['Drop'])){
                      $ID = $_POST['ID'];
                     

                      $s = "DELETE FROM `staff` WHERE id = '$ID';";


                      $query = mysqli_query($conn,$s);



                    }

                    



                            ?>

                            <?php
                            
                         $conn = new mysqli('localhost','root','','ucms');

                         if(!$conn){
                           echo "Not Connected!";
                         }
          
                         if(isset($_POST['view'])){
          
                       
                           $ID = $_POST['ID'];
                           $Name = $_POST['Name'];
                           $Father_Name = $_POST['Father_Name'];
                           $Mother_Name = $_POST['Mother_Name'];
                           $DOB = $_POST['DOB'];
                           $NID = $_POST['NID'];
                           $Contact = $_POST['Contact'];
                           $GuardianContact = $_POST['GuardianContact'];
                           $Address = $_POST['Address'];
                           $DeptID = $_POST['DeptID'];
                           $Class = $_POST['Class'];
                           $Section = $_POST['Section'];
                           $Roll = $_POST['Roll'];
                           $Fees = $_POST['Fees'];
                           $Weaver = $_POST['Weaver'];
                        
                           $sql = "SELECT* FROM  student WHERE  Name = '$Name' " ;
            
                           $query = $conn->query($sql);
                   
                   
                       
                           if ($query->num_rows> 0) {
                               $data = mysqli_fetch_assoc($query);
                               $_SESSION['ID'] = $ID;
                               $_SESSION['Name'] = $Name ;
                               $_SESSION['Father_Name'] = $Father_Name;
                               $_SESSION['Mother_Name'] = $Mother_Name;
                               $_SESSION['DOB'] = $DOB;
                                    echo $ID;
                              
                          
                           }else{
                              
                            echo 'error';
                           }
          
                         }

                            ?>




            <!-- table design -->
            <div class="tableView">

                <table class="table table-dark table-hover  border-black">

                    <thead>
                        <tr>

                            <th style="text-align: center" colspan="6"><span class="subj text-white">Staff</span></th>
                        </tr>

                        <tr>

                            <th scope="col"> ID </th>
                            <th scope="col"> Name </th>
                            <th scope="col"> Dept_ID </th>
                            <th scope="col"> Designation </th>
                            <th scope="col"> Contact </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
              $conn = new mysqli('localhost','root','','ucms');

              if(!$conn){
                echo "Not Connected!";
              }


              $s = "SELECT * FROM `staff` WHERE 1 ORDER BY ID";

              $result = mysqli_query($conn,$s);

              while($row = mysqli_fetch_array($result)){


            ?>

                        <tr>
                            <td scope="col"> <?php echo $row['ID']. "    " ?> </td>
                            <td scope="col"> <?php echo $row['Name']. "    "  ?> </td>
                            <td scope="col"> <?php echo $row['Dept_ID']. "    "  ?> </td>
                            <td scope="col"> <?php echo $row['Designation']. "    "  ?> </td>
                            <td scope="col"> <?php echo $row['Contact']. "    "  ?> </td>



                        </tr>
                        <?php } ?>


                    </tbody>
                </table>


            </div>

        </div>

    </main>





    <!-- Bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


</body>

</html>