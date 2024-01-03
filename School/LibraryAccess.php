<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibraryAccess Page</title>
    <!-- css link -->
    <link rel="stylesheet" href="Css/LibraryAccess.css">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        .tableView {
    width: 1000px;
    height: 320px;
    padding-right: 158px;
    margin-top: 105px;
    overflow-y: scroll;
}
        ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }
        .ad.col-auto {
    padding-right: 21px;
}
        .cont.col-auto {
    padding-right: 44px;
}
    .main-box {
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
                                    <hr class="dropdown-divider">

                                </li>

                                <li><a class="dropdown-item" href="Library.php">
                                        Library </a></li>

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
                    <form action="LibraryAccess.php" method="post">
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" id col-auto">
                                <label for="inputPassword6" class="col-form-label text-white">ID</label>
                            </div>
                            <div class=" ID col-auto">
                                <input type="text" name="ID" id="inputtext" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder="ID">
                            </div>


                        </div>

                        <div class="row g-3 align-items-center ps-5">
                            <div class=" name col-auto">
                                <label for="inputtext" class="col-form-label text-white"> Name</label>
                            </div>
                            <div class="  Name  col-auto">
                                <input type="text" name="Name" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline" placeholder=" Name">
                            </div>


                        </div>
                        <div class="row g-3 align-items-center ps-5">
                <div class=" cont col-auto">
                    <label for="inputPassword6" class="col-form-label text-white">AddedDate</label>
                </div>
                <div class="Contact col-auto">
                    <input type="date" name="AddedDate" id="inputPassword6" class="form-control"
                        aria-describedby="passwordHelpInline" placeholder="Added Date">
                </div>
                <div class="row g-3 align-items-center ">
                    <div class=" ad col-auto">
                        <label for="inputPassword6" class="col-form-label text-white">Contact</label>
                    </div>
                    <div class=" Dept-ID col-auto">
                        <input type="text" name="Contact" id="inputPassword6" class="form-control"
                            aria-describedby="passwordHelpInline" placeholder="Contact">
                    </div>

                </div>



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

            <!-- table design -->
            <div class="tableView">

                <table class="table table-dark table-hover  border-black">
                    <thead>
                        <tr>

                            <th style="text-align: center" colspan="4"><span class="subj text-white">Library
                                    Access</span>
                            </th>
                        </tr>
                        <tr>

                            <th scope="col"><button class="btn btn-dark rounded">ID</button></th>
                            <th scope="col"><button class="btn btn-dark rounded">Name</button></th>
                            <th scope="col"><button class="btn btn-dark rounded">Added Date</button></th>
                            <th scope="col"><button class="btn btn-dark rounded">Contact</button></th>

                        </tr>
                    </thead>
                    <?php
                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                      echo "Not Connected!";
                    }
           
                    if(isset($_POST['Insert'])){
           
                      $ID = $_POST['ID'];
                      $Name = $_POST['Name'];
                      $AddedDate = $_POST['AddedDate'];
                      $Contact = $_POST['Contact'];
                      $s = "INSERT INTO `libraryaccess`(`ID`, `Name`, `AddedDate`, `Contact`) VALUES ('$ID','$Name','$AddedDate','$Contact');";
                     

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
                      $AddedDate = $_POST['AddedDate'];
                      $Contact = $_POST['Contact'];

                      $s = "UPDATE `libraryaccess` SET `ID`='$ID',`Name`='$Name',`AddedDate`='$AddedDate',`Contact`='$Contact' WHERE 1;";
                     

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
                            $Name = $_POST['Name'];
                            $AddedDate = $_POST['AddedDate'];
                            $Contact = $_POST['Contact'];
                            
                            $s = "DELETE FROM `libraryaccess` WHERE ID ='$ID' ;";
                            

                            $query = mysqli_query($conn,$s);

                                  
                          }
        ?>

                    <tbody>


                        <?php
                                $conn = new mysqli('localhost','root','','ucms');

                                if(!$conn){
                                    echo "Not Connected!";
                                }

                                $s = "SELECT * FROM `libraryaccess` WHERE 1";

                                $result = mysqli_query($conn,$s);

                                while($row = mysqli_fetch_array($result)){

                            ?>
                                                        <tr>
                            <td scope="col"><?php echo $row['ID'] ?> </td>
                            <td scope="col"> <?php echo $row['Name'] ?> </td>
                            <td scope="col"> <?php echo $row['AddedDate'] ?> </td>
                            <td scope="col"> <?php echo $row['Contact'] ?> </td>


                        </tr>

                        <?php } ?>




                    </tbody>
                </table>

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