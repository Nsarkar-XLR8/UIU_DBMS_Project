<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canteen Page</title>
  <!-- css link -->
  <link rel="stylesheet" href="Css/Canteen.css">
  <!-- bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <style>
      ul.dropdown-menu.show {
              position: relative;
              left: -71px;
          }
      .Food_Name.col-auto {
    padding-left: 29px;
}
      .school-img1 img{
  width: 45px;
  height: 40px;
        border-radius: 35px;
    }
      .main-box{
        position: relative;
        background: url(images/b2.jpg) right no-repeat;
        background-size: cover;
        height: 92vh;
        width: 100%;
     
    }
    .tableView {
        margin-top: 50px;
        height: 300px;
        padding-right: 158px;
        padding-top: 27px;
        overflow-y: scroll;
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
                
                <li><a class="dropdown-item" href="Order.php">
                    Order</a></li>
                
                
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

  <form action="Canteen.php" method="post">
    <div class="row g-3 align-items-center ps-5">
      <div class=" id col-auto">
        <label for="inputPassword6" class="col-form-label text-white">Food_ID</label>
      </div>
      <div class=" ID col-auto">
        <input type="text" name="Food_ID" id="inputtext" class="form-control" aria-describedby="passwordHelpInline" placeholder="Food_ID" required>
      </div>
      
      
    </div>
    
    <div class="row g-3 align-items-center ps-5">
      <div class=" name col-auto">
        <label for="inputtext" class="col-form-label text-white">Food_Name</label>
      </div>
      <div class="  Food_Name  col-auto">
        <input type="text" name="Food_Name" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Food_Name" required>
      </div>
      
      
    </div>

    <div class="row g-3 align-items-center ps-5">
      <div class=" ad col-auto">
        <label for="inputPassword6" class="col-form-label text-white">CostPrice</label>
      </div>
      <div class=" Dept-ID col-auto">
        <input type="text" name="CostPrice" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="CostPrice" required>
      </div>
      
      
    </div>

    <div class="row g-3 align-items-center ps-5">
      <div class="dep col-auto">
        <label for="inputPassword6" class="col-form-label text-white">SellPrice</label>
      </div>
      <div class=" address col-auto">
        <input type="text" name="SellPrice" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="SellPrice" required>
      </div>
      
      
    </div>

    <div class="row g-3 align-items-center ps-5">
      <div class=" cont col-auto">
        <label for="inputPassword6" class="col-form-label text-white">Quantity</label>
      </div>
      <div class="Contact col-auto">
        <input type="text" name="Quantity" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Quantity" required>
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
  <!-- <div id="btn_detail">
    <button type="button " class="btn btn-dark fw-bold ms-5">ADD</button>
    <button type="button" class="btn btn-dark fw-bold ms-3">UpDate</button>
    <button type="button" class="btn btn-dark fw-bold ms-3">Remove</button>
    <button type="button" class="btn btn-dark  fw-bold ms-3">Refresh</button>
  </div> -->
 </div>


        <?php
         $conn = new mysqli('localhost','root','','ucms');

         if(!$conn){
           echo "Not Connected!";
         }

         if(isset($_POST['Insert'])){

           $Food_ID = $_POST['Food_ID'];
           $Food_Name = $_POST['Food_Name'];
           $CostPrice = $_POST['CostPrice'];
           $SellPrice = $_POST['SellPrice'];
           $Quantity = $_POST['Quantity'];


           $s = "INSERT INTO `canteen`(`Food_ID`, `Food_Name`, `CostPrice`, `SellPrice`, `Quantity`) VALUES ('$Food_ID','$Food_Name','$CostPrice','$SellPrice','$Quantity');";
          

           $query = mysqli_query($conn,$s);

                 
         }


        ?>


                    <?php

                    $conn = new mysqli('localhost','root','','ucms');

                    if(!$conn){
                      echo "Not Connected!";
                    }

                    if(isset($_POST['Update'])){

                      $Food_ID = $_POST['Food_ID'];
                      $Food_Name = $_POST['Food_Name'];
                      $CostPrice = $_POST['CostPrice'];
                      $SellPrice = $_POST['SellPrice'];
                      $Quantity = $_POST['Quantity'];

                    $s = "UPDATE `canteen` SET `Food_ID`='$Food_ID',`Food_Name`='$Food_Name',`CostPrice`='$CostPrice',`SellPrice`='$SellPrice',`Quantity`='$Quantity' WHERE 1;";


                    $query = mysqli_query($conn,$s);

                        
                    }
                    ?>
                                          <?php
                              $conn = new mysqli('localhost','root','','ucms');

                              if(!$conn){
                                echo "Not Connected!";
                              }

                          if(isset($_POST['Drop'])){

                            $Food_ID = $_POST['Food_ID'];
                            $Food_Name = $_POST['Food_Name'];
                            $CostPrice = $_POST['CostPrice'];
                            $SellPrice = $_POST['SellPrice'];
                            $Quantity = $_POST['Quantity'];
                            
                            $s = "DELETE FROM `canteen` WHERE Food_ID = '$Food_ID' ;";
                            

                            $query = mysqli_query($conn,$s);

                                  
                          }
                              ?>
        
        
    

      <!-- table design -->
      <div class="tableView">
          
        <table class="table table-dark table-hover  border-black">
            <thead>
            <tr>
                       
                       <th style="text-align: center" colspan="6"><span class="subj text-white">Canteen</span></th>
                   </tr>
              <tr>
                
                <th scope="col"><button class="btn btn-dark rounded">Food ID</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Name</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Cost Price</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Sell Price</button></th>
                <th scope="col"><button class="btn btn-dark rounded">Quantity</button></th>
                
              </tr>
            </thead>
            
            <tbody>
              <?php
                $conn = new mysqli('localhost','root','','ucms');
                if(!$conn){
                  echo "Not Connected!";
                }
                  $s = "SELECT * FROM `canteen` WHERE 1";

                  $result = mysqli_query($conn,$s);

                  while($row=mysqli_fetch_array($result)){



              ?>
              <tr>
                <td scope="col"> <?php echo $row['Food_ID'] ?> </td>
                <td scope="col"> <?php echo $row['Food_Name'] ?> </td>
                <td scope="col"> <?php echo $row['CostPrice'] ?> </td>
                <td scope="col"> <?php echo $row['SellPrice'] ?> </td>
                <td scope="col"> <?php echo $row['Quantity'] ?> </td>
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