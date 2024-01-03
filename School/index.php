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
                            <a class="nav-link active" aria-current="page" href="#"> Home</a>
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
        <!-- banner slider -->
        <div id="carouselExampleAutoplaying" class="carousel slide pb-5" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img style="height: 450px;" src="images/banner2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">

                        <p class="welcome fs-1">Welcome</p>
                        <p class="welcome fs-3">To</p>
                        <p class="welcome fs-1">United School & Collage</p>
                        <p class=" fs-4">
                            <strong>"Embracing Curiosity, Igniting Minds, Crafting Futures."</strong>
                        </p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img style="height: 450px;" src="images/b.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <p class="welcome fs-1">Welcome</p>
                        <p class="welcome fs-3">To</p>
                        <p class="welcome fs-1">United School & Collage</p>
                        <p class=" fs-4">
                            <strong>"Embracing Curiosity, Igniting Minds, Crafting Futures."</strong>
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img style="height: 450px;" src="images/extra.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <p class="welcome fs-1">Welcome</p>
                        <p class="welcome fs-3">To</p>
                        <p class="welcome fs-1">United School & Collage</p>
                        <p class=" fs-4">
                            <strong>"Embracing Curiosity, Igniting Minds, Crafting Futures."</strong>
                        </p>
                    </div>
                </div>


                <div class="carousel-item">
                    <img style="height: 450px;" src="images/b2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <p class="welcome fs-1">Welcome</p>
                        <p class="welcome fs-3">To</p>
                        <p class="welcome fs-1">United School & Collage</p>
                        <p class=" fs-4">
                            <strong>"Embracing Curiosity, Igniting Minds, Crafting Futures."</strong>
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </header>
    <hr>

    <!-- card work -->






    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/b2.jpg">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="images/admin.jpg" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Admin</h4>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/b2.jpg">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="images/student1.jpg" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">student</h4>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/b2.jpg">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="images/teacher.jpg" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Teacher</h4>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/b2.jpg">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="images/staff.jpg" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Staff</h4>
                    </div>

                </div>
            </div>
        </div>

    </div>







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
                <h5><a href="AdmissionForm.php">Admission Requirement</a></h5>
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