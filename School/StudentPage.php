<?php

        session_start();

        if(isset($_POST['View'])){

            $query = $conn->query($sql);

                $ID = $_POST['ID'];
                
        $sql = "SELECT * FROM  student WHERE  ID = '$ID' " ;

        $query = mysqli_query($conn,$s);
        while ( $data = $query->fetch_assoc()) {
            $ViewID =  $data['ID']+1;
            $ViewName = $data['Name'];
            $ViewFather_Name = $data['Father_Name'];
            $ViewMother_Name = $data['Mother_Name'];
            $ViewDOB = $data['DOB'];
            $ViewNID = $data['NID'];
            $ViewContact = $data['Contact'];
            $ViewGuardianContact = $data['GuardianContact'];
            $ViewAddress = $data['Address'];
            $ViewDeptID = $data['DeptID'];
            $ViewClass = $data['Class'];
            $ViewSection = $data['Section'];
            $ViewRoll = $data['Roll'];
            $ViewFees = $data['Fees'];
            $ViewWeaver = $data['Weaver'];   
        }


    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <!-- css link -->
    <link rel="stylesheet" href="Css/StudentPage.css">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <style>

.tableView {
    width: 772px;
    margin-top: 82px;
    height: 300px;
    padding-right: 158px;
    padding-top: 27px;
    overflow-y: scroll;
}
         .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }
    .main-box {
        position: relative;
        background: url(images/b2.jpg) right no-repeat;
        background-size: cover;
        height: 92vh;
        width: 100%;

    }

    .d-flex.justify-content-around.p-3.w-75.p-3 a {
        text-decoration: none;
        background: #331e1e;
        color: #fff;

    }

    .d-flex.justify-content-around.p-3.w-75.p-3 a:hover {
        background: none;
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
                            <a class="nav-link " href="ContactPage.php">Contact</a>
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
                                <li><a class="dropdown-item">
                                        <a class="dropdownItem" href="StudentFees.php">Student Fee</a> </a></li>
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
        <div class="main-box  justify-content-between">

            <!-- details  -->
            <div id="info">
                <div class="details ">
                    <form action="StudentPage.php" method="post">
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" id col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">ID</label>
                            </div>
                            <div class="iD  col-auto">
                                <input type="text" name="ID" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="ID" required>
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" name col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Name</label>
                            </div>
                            <div class="nam col-auto">
                                <input type="text" name="Name" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Name">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" ad col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Father Name</label>
                            </div>
                            <div class=" fath col-auto">
                                <input type="text" name="Father Name" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Father Name">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="dep col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Mother Name</label>
                            </div>
                            <div class=" motr col-auto">
                                <input type="text" name="Mother Name" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Mother Name">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">DOB</label>
                            </div>
                            <div class=" dob col-auto">
                                <input type="date" name="DOB" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="DOB">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">NID</label>
                            </div>
                            <div class=" nid col-auto">
                                <input type="text" name="NID" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="NID">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class=" col-form-label text-white">Contact</label>
                            </div>
                            <div class=" con col-auto">
                                <input type="text" name="Contact" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Contact">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Guardian-Contact</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="GuardianContact" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Guardian-Contact">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="des col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Address</label>
                            </div>
                            <div class=" add col-auto">
                                <input type="text" name="Address" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Address">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" join col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">DeptID</label>
                            </div>
                            <div class="dept col-auto">
                                <input type="text" name="DeptID" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="DeptID">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="sal col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Class</label>
                            </div>
                            <div class="cls col-auto">
                                <input type="text" name="Class" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Class">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="sal col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Section</label>
                            </div>
                            <div class="sec col-auto">
                                <input type="text" name="Section" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Section">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="sal col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Roll</label>
                            </div>
                            <div class="roll col-auto">
                                <input type="text" name="Roll" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Roll">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="sal col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Fees</label>
                            </div>
                            <div class="fees col-auto">
                                <input type="text" name="Fees" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Fees">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="sal col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Weaver</label>
                            </div>
                            <div class="wav col-auto">
                                <input type="text" name="Weaver" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Waver">
                            </div>


                        </div>

                </div>



                <div class="d-flex justify-content-around p-3 w-75 p-3">
                    <button class="btn btn-dark" name="Insert">Insert</button>

                    <button class="btn btn-dark" name="Update">Update</button>

                    <button class="btn btn-dark" name="Drop">Drop</button>
                    
                    <button class="btn btn-dark" name="view">View</button>

                </div>

                </form>
                <div class="view">
                    <!-- <form action="StudentPage.php" method="post" class="form-inline">

                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" name="ID" class="form-control inputView" id="inputPassword2"
                                placeholder="Id">
                        </div>
                        <input type="submit" name="login" value="View" class="btn solid"> -->
                    <!-- </form> -->
                    <?php

                                $conn = new mysqli('localhost','root','','ucms');

                                if(!$conn){
                                echo "Not Connected!";
                                }



                            if (isset($_POST['ID']) ) {
                                $ID = $_POST['ID'];
                            
                                

                                $sql = "SELECT* FROM student WHERE  ID = '$ID' ";
                        
                                $query = $conn->query($sql);
                        
                        
                            
                                if ($query->num_rows> 0) {
                                    $data = mysqli_fetch_assoc($query);

                                    
                                    $user_id = $data['ID'];
                                    $Name = $data['Name'];
                                    $Father_Name = $data['Father_Name'];
                                    $Mother_Name = $data['Mother_Name'];
                                    $DOB = $data['DOB'];
                                    $NID = $data['NID'];
                                    $Contact = $data['Contact'];
                                    $GuardianContact = $data['GuardianContact'];
                                    $Address = $data['Address'];
                                    $DeptID = $data['DeptID '];
                                    $Class = $data['Class'];
                                    $Section = $data['Section'];
                                    $Roll = $data['Roll'];
                                    $Fees = $data['Fees'];
                                    $Weaver = $data['Weaver'];
                                    
                                    
                                    $_SESSION['user_id'] = $user_id;
                                    $_SESSION['Name'] = $Name;
                                    $_SESSION['Father_Name'] = $Father_Name;
                                    $_SESSION['Mother_Name'] = $Mother_Name;
                                    $_SESSION['DOB'] = $DOB;
                                    $_SESSION['NID'] = $NID;
                                    $_SESSION['Contact'] = $Contact;
                                    $_SESSION['GuardianContact'] = $GuardianContact;
                                    $_SESSION['Address'] = $Address;
                                    $_SESSION['DeptID'] = $DeptID;
                                    $_SESSION['Class'] = $Class;
                                    $_SESSION['Section'] = $Section;
                                    $_SESSION['Roll'] = $Roll;
                                    $_SESSION['Fees'] = $Fees;
                                    $_SESSION['Weaver'] = $Weaver;

                                    echo "<script>window.location.href='ViewStudentPage.php'</script>"  ;  
                                    
                                    // header("location:details.php");
                            
                                }else{
                                
                                echo 'error';
                                }
                            }
                        
                            ?>
                </div>
            </div>





            

            <!-- table design -->
            <div class="tableView">


            
            <?php

                              $conn = new mysqli('localhost','root','','ucms');

                              if(!$conn){
                                echo "Not Connected!";
                              }

                              if(isset($_POST['Insert'])){

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

                              $s = "INSERT INTO `student`(`ID`, `Name`, `Father_Name`, `Mother_Name`, `DOB`, `NID`, `Contact`, `GuardianContact`, `Address`, `DeptID`, `Class`, `Section`, `Roll`, `Fees`, `Weaver`) VALUES ('$ID','$Name','$Father_Name','$Mother_Name','$DOB','$NID','$Contact','$GuardianContact','$Address','$DeptID','$Class','$Section','$Roll','$Fees','$Weaver');";
                            
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

                            $s = "UPDATE `student` SET `ID`='$ID',`Name`='$Name',`Father_Name`='$Father_Name',`Mother_Name`='
                            $Mother_Name',`DOB`='$DOB',`NID`='$NID',`Contact`='$Contact',`GuardianContact`='$GuardianContact',`Address`='$Address',`DeptID`='$DeptID',`Class`='$Class',`Section`='$Section',`Roll`='$Roll',`Fees`='$Fees',`Weaver`='$Weaver' WHERE 1;";

                            $query = mysqli_query($conn,$s);

                        }

                        

            ?>

            <?php
               $conn = new mysqli('localhost','root','','ucms');

               if(!$conn){
                 echo "Not Connected!";
               }

               if(isset($_POST['Drop'])){

                 $ID = $_POST['ID'];
                

                 $s = "DELETE FROM `student` WHERE id = '$ID' ;";

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


                <!-- <table class="table table-dark table-hover  border-black">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"><button class="btn btn-dark rounded">ID</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Name</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Department</button></th>
                <th scope="col"><button class="btn btn-dark rounded">class</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Roll</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Button</button></th>
              </tr>
            </thead>
            
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="1">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="1">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="1">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="1">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="1">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="1">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td scope="col"><button class="btn-primary rounded ms-3">View</button></td>
              </tr>
              
            </tbody>
        </table> -->

                <?php
                                          
                                    $conn = new mysqli('localhost','root','','ucms');
                              
                                    if(!$conn){
                                      echo "Not Connected";
                                    } 
                                    
                                    $sql1 = "SELECT 
                                    ID,
                                    Name,
                                    DeptID,	
                                    Class,
                                    Roll
                                    FROM student where 1";
                                    $result = $conn->query($sql1);
                              
                                    if ($result->num_rows > 0) {


                                    echo "<h3 style='text-align:center  ; margin-top:15px;color:white;'>Student</h3>";
                                    
                                    echo "<table border='1' class = 'table table-success' ;><tr><th> ID </th> <th>Name</th> <th>	DeptID</th> <th>Class</th> <th>Roll</th> </tr>";
                                    
                                    while ( $data = $result->fetch_assoc()) {
                                    $Student_Id = $data['ID'];   
                                    $Student_Name = $data['Name'];
                                    $Student_DeptID = $data['DeptID'];
                                    $Student_Class = $data['Class'];
                                    $Student_Roll = $data['Roll'];
                                    
                                    
                                
                              
                                    echo "<tr>
                                        
                                            <td>$Student_Id</td> 
                                            <td>$Student_Name</td>  
                                            <td>$Student_DeptID</td>  
                                            <td>$Student_Class</td>  
                                            <td>$Student_Roll</td>  
                                          
                                    
                                        </tr>";
                                    
                                    }
                                    echo "</table>"; 
                              }



                ?>


            </div>



        </div>

    </main>





    <!-- Bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


</body>

</html>