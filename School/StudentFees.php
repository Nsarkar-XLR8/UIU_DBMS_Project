<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentFees</title>
    <!-- css link -->
    <link rel="stylesheet" href="Css/studentFees.css">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        .tableView {
    width: 800px;
    height: 300px;
    padding-right: 158px;
    margin-top: 68px;
    overflow-y: scroll;
}
        ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }
    .main-box {
        position: relative;
        background: url(images/b2.jpg) right no-repeat;
        background-size: cover;
        height: 92vh;
        width: 100%;

    }
    .Dept-ID.col-auto {
    margin-left: 75px;
     }
     .Name.col-auto {
    margin-left: 85px;
     }
     .ID.col-auto {
    margin-left: -10px;
}

.tableView {
    height: 300px;
    padding-right: 158px;
    margin-top: 68px;
    overflow-y: scroll;
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
                                Select
                            </a>
                            <ul class="drop dropdown-menu ">
                                <li>
                                    <a class="dropdown-item" href="admindashBoard.php">Dashboard</a>
                                    <!-- <hr class="dropdown-divider"> -->

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="StudentPage.php">Student</a>
                                </li>


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
                    <form action="StudentFees.php" method="post">
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" id col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Student_ID</label>
                            </div>
                            <div class=" ID col-auto">
                                <input type="text" name="Student_ID" id="inputtext" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Student ID" required>
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" name col-auto">
                                <label for="inputtext" class="col-form-label text-white">Month</label>
                            </div>
                            <div class="  Name  col-auto">
                                <input type="text" name="Month" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Month">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" ad col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Year</label>
                            </div>
                            <div class=" Dept-ID col-auto">
                                <input type="text" name="Year" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Year">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="dep col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Amount</label>
                            </div>
                            <div class=" address col-auto">
                                <input type="text" name="Amount" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Amount">
                            </div>


                            <div class="row g-3 align-items-center ps-4">
                                <div class="dep col-auto">
                                    <label for="inputPassword6" class="col-form-label text-white">Date</label>
                                </div>
                                <div class=" address col-auto">
                                    <input type="date" name="Date" id="inputPassword6" class="form-control"
                                        aria-describedby="passwordHelpInline" placeholder="Date">
                                </div>



                            </div>



                        </div>

                        <div class="d-flex justify-content-around p-3 w-75 p-3">
                            <button class="btn btn-dark" name="Insert">Insert</button>

                            <button class="btn btn-dark" name="Update">Update</button>

                            <button class="btn btn-dark" name="Drop">Drop</button>
                        </div>


                        <!-- <input type="submit" name="Insert" value="Insert" class="btn solid">
                        <input type="submit" name="Update" value="Update" class="btn solid">
                        <input type="submit" name="Drop" value="Drop" class="btn solid"> -->

                    </form>


                    <!-- table design -->

                </div>

                <?php

                                                  $conn = new mysqli('localhost','root','','ucms');

                                                  if(!$conn){
                                                    echo "Not Connected!";
                                                  }

                                                  if(isset($_POST['Insert'])){

                                                    $Student_ID = $_POST['Student_ID'];
                                                    $Month = $_POST['Month'];
                                                    $Year = $_POST['Year'];
                                                    $Amount = $_POST['Amount'];
                                                    $Date = $_POST['Date'];
                                                    

                                                  $s = "INSERT INTO `payment`(`Student_ID`, `Month`, `Year`, `Amount`, `Date`) VALUES ('$Student_ID','$Month','$Year','$Amount','$Date');";

                                                  $query = mysqli_query($conn,$s);


                                                  }
                                                  ?>

                <?php
                                                  $conn = new mysqli('localhost','root','','ucms');

                                                  if(!$conn){
                                                  echo "Not Connected!";
                                                  }

                                                  if(isset($_POST['Update'])){

                                                    $Student_ID = $_POST['Student_ID'];
                                                    $Month = $_POST['Month'];
                                                    $Year = $_POST['Year'];
                                                    $Amount = $_POST['Amount'];
                                                    $Date = $_POST['Date'];

                                                  $s1 = "UPDATE `payment` SET `Student_ID`='$Student_ID',`Month`='$Month',`Year`='$Year',`Amount`='$Amount',`Date`='$Date' WHERE 1;";

                                                  $query = mysqli_query($conn,$s1);

                                                  }


                 ?>

                <?php
                                                  $conn = new mysqli('localhost','root','','ucms');

                                                  if(!$conn){
                                                  echo "Not Connected!";
                                                  }

                                                  if(isset($_POST['Drop'])){

                                                    $Student_ID = $_POST['Student_ID'];
                                                    $Month = $_POST['Month'];
                                                    $Year = $_POST['Year'];
                                                    $Amount = $_POST['Amount'];
                                                    $Date = $_POST['Date'];

                                                  $s = "DELETE FROM `payment` WHERE id = '$Student_ID';";

                                                  $query = mysqli_query($conn,$s);


                                                  }

                ?>

            </div>
            <div class="tableView">

                <table class="table table-dark table-hover  border-black">
                    <thead>
                        <tr>

                            <!-- <th scope="col"><button class="btn btn-dark rounded">ISBN</button></th>
                          <th scope="col"><button class="btn btn-dark rounded"> Borrowed ID</button></th>
                        <th scope="col"><button class="btn btn-dark rounded">Borrowed Date</button></th>
                          <th scope="col"><button class="btn btn-dark rounded">Return Date</button></th> -->
                            <th style="text-align: center" colspan="6"><span class="subj text-white">Payment</span>
                            </th>


                        </tr>

                        <tr>

                            <th scope="col">Student_ID</th>
                            <th scope="col">Month</th>
                            <th scope="col">Year</th>

                            <th scope="col"> Amount </th>

                            <th scope="col"> Date </th>



                        </tr>

                    </thead>

                    <tbody>


                        <?php


                        $conn = new mysqli('localhost','root','','ucms');

                          $s="SELECT * FROM payment";
                          $result = mysqli_query($conn,$s);
                          while($row=mysqli_fetch_array($result)){
                        ?>

                        <tr>
                            <td scope="col"> <?php  echo  $row['Student_ID'] ?></td>
                            <td scope="col"> <?php  echo  $row['Month'] ?></td>
                            <td scope="col"> <?php  echo  $row['Year'] ?></td>
                            <td scope="col"> <?php  echo  $row['Amount'] ?></td>
                            <td scope="col"> <?php  echo  $row['Date'] ?></td>




                        </tr>

                        <?php } ?>

                    </tbody>
                </table>

            </div>



    </main>





    <!-- Bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


</body>

</html>