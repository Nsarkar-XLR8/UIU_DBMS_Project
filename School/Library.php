<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Page</title>
    <!-- css link -->
    <link rel="stylesheet" href="Css/LibraryPage.css">
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
        height: 92vh;
        width: 100%;

    }

    .tableView {
    height: 300px;
    margin-top: 87px;
    overflow: auto;
    width: 1370px;
    position: relative;
    right: 26px;
}
    .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }
    </style>

</head>

<body>

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
                                    <a class="dropdown-item" href="admindashboard.php">Dashboard</a>
                                    <hr class="dropdown-divider">

                                </li>

                                <li><a class="dropdown-item" href="LibraryAccess.php">
                                        Access </a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="BorrowedBook.php">Borrow</a></li>

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
                    <form action="Library.php" method="post">
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" id col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">ISBN</label>
                            </div>
                            <div class=" ID col-auto">
                                <input type="text" name="ISBN" id="inputtext" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="ISBN" required>
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" name col-auto">
                                <label for="inputtext" class="col-form-label text-white">BookName</label>
                            </div>
                            <div class="  Name  col-auto">
                                <input type="text" name="BookName" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Book Name">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" ad col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Author</label>
                            </div>
                            <div class=" Dept-ID col-auto">
                                <input type="text" name="Author" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Author">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class="dep col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">Publisher</label>
                            </div>
                            <div class=" address col-auto">
                                <input type="text" name="Publisher" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="Publisher">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">year</label>
                            </div>
                            <div class="Contact col-auto">
                                <input type="text" name="year" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="year">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">NOC</label>
                            </div>
                            <div class=" Designation col-auto">
                                <input type="text" name="NOC" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="NOC">
                            </div>


                            <!-- <input type="submit" name="Insert" value="Insert" class="btn solid">
                      <input type="submit" name="Update" value="Update" class="btn solid">
                      <input type="submit" name="Drop" value="Drop" class="btn solid"> -->
                            <div class="d-flex justify-content-around p-3 w-75 p-3">
                                <button class="btn btn-dark" name="Insert">Insert</button>

                                <button class="btn btn-dark" name="Update">Update</button>

                                <button class="btn btn-dark" name="Drop">Drop</button>
                            </div>



                    </form>


                </div>










            </div>

        </div>
        <?php
         $conn = new mysqli('localhost','root','','ucms');

         if(!$conn){
           echo "Not Connected!";
         }

         if(isset($_POST['Insert'])){

           $ISBN = $_POST['ISBN'];
           $BookName = $_POST['BookName'];
           $Author = $_POST['Author'];
           $Publisher = $_POST['Publisher'];
           $year = $_POST['year'];
           $NOC = $_POST['NOC'];
          //  $Contact = $_POST['Contact'];
          //  $GuardianContact = $_POST['GuardianContact'];
          //  $Address = $_POST['Address'];
          //  $DeptID = $_POST['DeptID'];
          //  $Class = $_POST['Class'];
          //  $Section = $_POST['Section'];
          //  $Roll = $_POST['Roll'];
          //  $Fees = $_POST['Fees'];
          //  $Weaver = $_POST['Weaver'];



                $s = "INSERT INTO `library`(`ISBN`, `BookName`, `Author`, `Publisher`, `year`, `No_of_Copies`) VALUES (' $ISBN','$BookName','$Author','$Publisher','$year','$NOC');";




         
                $query = mysqli_query($conn,$s);

                            
              }
        ?>
        <?php
         if(isset($_POST['Update'])){

          $ISBN = $_POST['ISBN'];
          $BookName = $_POST['BookName'];
          $Author = $_POST['Author'];
          $Publisher = $_POST['Publisher'];
          $year = $_POST['year'];
          $NOC = $_POST['NOC'];

          $s = "UPDATE `library` SET `ISBN`='$ISBN',`BookName`='$BookName',`Author`='$Author',`Publisher`='$Publisher',`year`='$year',`No_of_Copies`='$NOC' WHERE 1;";
          
          $query = mysqli_query($conn,$s);

                            
        }

        ?>

        <?php
         if(isset($_POST['Drop'])){

          $ISBN = $_POST['ISBN'];
          $BookName = $_POST['BookName'];
          $Author = $_POST['Author'];
          $Publisher = $_POST['Publisher'];
          $year = $_POST['year'];
          $NOC = $_POST['NOC'];

          $s = "DELETE FROM `library` WHERE isbn = '$ISBN' ;";

           
          $query = mysqli_query($conn,$s);

                            
        }




          ?>




        <!-- table design -->
        <div class="tableView">

            <table class="table table-dark table-hover  border-black">
                <thead>
                <tr>
                       
                       <th style="text-align: center" colspan="6"><span class="subj text-white">Library</span></th>
                   </tr>
                    <tr>

                        <th scope="col"><button class="btn btn-dark rounded">ISBN</button></th>
                        <th scope="col"><button class="btn btn-dark rounded">Book Name</button></th>
                        <th scope="col"><button class="btn btn-dark rounded">Author</button></th>
                        <th scope="col"><button class="btn btn-dark rounded">Publisher</button></th>
                        <th scope="col"><button class="btn btn-dark rounded">Year</button></th>
                        <th scope="col"><button class="btn btn-dark rounded">Noc</button></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
              $conn = new mysqli('localhost','root','','ucms');

              $s = "SELECT * FROM `library` WHERE 1";

              $result = mysqli_query($conn,$s);

              while($row = mysqli_fetch_array($result)){

             

              ?>

                    <tr>
                        <td scope="col"> <?php echo $row['ISBN'] ?> </td>
                        <td scope="col"> <?php echo $row['BookName'] ?> </td>
                        <td scope="col"> <?php echo $row['Author'] ?> </td>
                        <td scope="col"> <?php echo $row['Publisher'] ?> </td>
                        <td scope="col"> <?php echo $row['year'] ?> </td>
                        <td scope="col"> <?php echo $row['No_of_Copies'] ?> </td>

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