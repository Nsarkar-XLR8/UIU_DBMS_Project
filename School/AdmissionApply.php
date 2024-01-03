
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=EB+Garamond:ital,wght@1,500&display=swap"
        rel="stylesheet">

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=EB+Garamond:ital,wght@1,500&display=swap');
    </style>

    <style>
        span{
        color: #f9004d;
        
      }
        .details.pt-5 {
    position: relative;
    /* left: 100px; */
    width: 492px;
}
    ul.dropdown-menu.show {
        position: relative;
        left: -71px;
    }

    .school-img img {
        width: 60px;
        border-radius: 35px;
    }

    h3.pb-3,
    .pb-2 {
        text-decoration: underline solid #f9004d;
    }


    h4,
    p .welcome {
        font-family: 'Abril Fatface', cursive;
        font-family: 'EB Garamond', serif;

    }

    .footer {
        background-color: #000000;

    }

    .parent.d-flex.justify-content-around.text-white-50.bg-dark.pt-5 {
        height: 231px;
    }

    .social-media {
        font-size: 33px;
    }

    .ucms {
        padding-top: 19px;
        padding-left: 14px;
    }

    .school-img1 img {
        width: 45px;
        height: 40px;
        border-radius: 35px;
    }

    .main-box{
    position: relative;
    background: url(images/extra.jpg) right no-repeat;
    background-size: cover;
    height: 92vh;
    width: 100%;
 
}

.form{
    margin-left:auto;
    margin-right:auto;
}
.name.col-auto {
    padding-right: 56px;
}
.dep.col-auto {
    padding-right: 9px;
}
.cont.col-auto {
    padding-right: 47px;
}
.des.col-auto {
    padding-right: 45px;
}
.sal.col-auto {
    padding-right: 62px;
}
    </style>

</head>

<body class="">

    <header>
        <!-- nav bar  -->
        <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary"
            data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h3 class="fw-bold">
                        <div class="img">
                            <div class="school-img1 d-flex justify-content-center">
                                <img src="images/U.jpg" alt="">
                                <span class="fw-bold pt-2 ps-2">UCMS</span>
                            </div>

                        </div>
                    </h3>
                </a>
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
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="dropdown-item text-white-50 bg-dark " href="admin.php">
                                        Admin </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-white-50 bg-dark" href="Library.php">Library</a></li>
                                <!-- <li>
                                    <hr class="dropdown-divider">
                                </li> -->
                                <li><a class="dropdown-item text-white-50 bg-dark" href="Canteen.php">Canteen</a></li>
                                <!-- <li>
                                    <hr class="dropdown-divider">
                                </li> -->
                                <li><a class="dropdown-item text-white-50 bg-dark" href="ClassRoutineView.php">Exam Routine</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
       


    </header>
    


    <center>
    <div class="main-box">
        <h3 class="pt-2">Admission form</h3>
         <div class="form">
     
            <form action="AdmissionApply.php" method="post">
                    <div class="details pt-5">
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" name col-auto">
                            <label for="inputPassword6" class="col-form-label text-white">Name</label>
                            </div>
                            <div class="col-auto">
                            <input type="text" id="inputPassword6" name = "Name" class="form-control" aria-describedby="passwordHelpInline" placeholder="Name">
                            </div>
                            
                            
                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" ad col-auto">
                            <label for="inputPassword6" class="col-form-label text-white">Father Name</label>
                            </div>
                            <div class="col-auto">
                            <input type="text" id="inputPassword6" name="Father_Name" class="form-control" aria-describedby="passwordHelpInline" placeholder="Father Name">
                            </div>
                            
                            
                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class="dep col-auto">
                            <label for="inputPassword6" class="col-form-label text-white">Mother Name</label>
                            </div>
                            <div class="col-auto">
                            <input type="text" id="inputPassword6" name="Mother Name" class="form-control" aria-describedby="passwordHelpInline" placeholder="Mother Name">
                            </div>
                            
                            
                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class=" cont col-auto">
                            <label for="inputPassword6" class="col-form-label text-white">Contact</label>
                            </div>
                            <div class="col-auto">
                            <input type="text" id="inputPassword6" name="Contact" class="form-control" aria-describedby="passwordHelpInline" placeholder="Contact">
                            </div>
                            
                            
                        </div>
                        <div class="row g-3 align-items-center ps-5">
                            <div class="des col-auto">
                            <label for="inputPassword6" class="col-form-label text-white">Address</label>
                            </div>
                            <div class="col-auto">
                            <input type="text" id="inputPassword6" name="Address" class="form-control" aria-describedby="passwordHelpInline" placeholder="Address">
                            </div>
                            
                            
                        </div>
                        <div class="row g-3 align-items-center ps-5">
                        <div class="sal col-auto">
                            <label for="inputPassword6" class="col-form-label text-white">Class</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="inputPassword6" name="Class" class="form-control" aria-describedby="passwordHelpInline" placeholder="Class">
                        </div>
                        
                        
                        </div>
                        <div class="col-12">
                            <button type="submit" name="Submit" value="Submit"  class="btn  text-white bg-dark">Submit</button>
                        </div>  
                    </div>
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

                                if(isset($_POST['Submit'])){

                                
                                $Name = $_POST['Name'];
                                $Father_Name = $_POST['Father_Name'];
                                $Mother_Name = $_POST['Mother_Name'];
                                $Contact = $_POST['Contact'];
                                $Address = $_POST['Address'];
                                $Class = $_POST['Class'];
                                
                                $_SESSION['Name'] = $Name;
                                $_SESSION['Father_Name'] = $Father_Name;
                                $_SESSION['Mother_Name'] = $Mother_Name;
                                $_SESSION['Contact'] = $Contact;
                                $_SESSION['Address'] = $Address;
                                $_SESSION['Class'] = $Class;

                                $s = "INSERT INTO `admission`(`Name`, `Father_Name`, `Mother_Name`, `Contact`, `Address`, `Class`) VALUES ('$Name','$Father_Name','$Mother_Name','$Contact','$Address','$Class');";
                            
                                $query = mysqli_query($conn,$s);

                            
                            }



                    ?>
            </form>
    
         </div>
    </div>
    </center>
  

    







    <!-- footer -->
    <footer>
        <div class="parent d-flex justify-content-around text-white-50 bg-dark pt-5">
            <div class="img">
                <div class="school-img d-flex justify-content-center">
                    <img src="images/U.jpg" alt="">
                    <h5 class="ucms">UCMS</h5>
                </div>
                <h1>United International School</h1>
            </div>
            <div class="contact ">
                <h3 class="pb-2">Contact</h3>
                <h6>United City, Madani Avenue, <br> Badda, Dhaka 1212, Bangladesh.
                    <br>Phone: +88 03678697498
                    <br>Email :nrabbi203016@bscse.uiu.ac.bd
                </h6>
                <div class="social-media">
                    <a href="#"><i class="fa-brands fa-facebook" style="color: #c5cad3;"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter" style="color: #ced4de;"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram" style="color: #bcc0c8;"></i></a>

                </div>

            </div>
            <div class="imp-link">
                <h3 class="pb-3">Important Link</h3>
                <h5><a href="">Bus Service Schedule</a></h5>
                <h5><a href="ClassRoutineView.php">Exam Routine</a></h5>
            </div>
        </div>



    </footer>



    <!-- Bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>








    <script>
    function startCarousel() {
        var carouselElement = document.getElementById('carouselExample');
        var carousel = new bootstrap.Carousel(carouselElement, {
            interval: 0,
        });
    }

    document.addEventListener('DOMContentLoaded', startCarousel);
    </script>

</body>

</html>