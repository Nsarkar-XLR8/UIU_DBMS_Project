<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission-Form</title>
    <link rel="stylesheet" href="Css/admission.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
      span{
        color: #f9004d;
        
      }
      ul.dropdown-menu.show {
        position: relative;
        left: -71px;
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
    .school-img img {
        width: 60px;
        border-radius: 35px;
    }

    .main-box1 img {
        /* position: relative; */
        /* background: url(images/extra.jpg) right no-repeat; */
        /* background-size: cover; */
        height: 400px;
        width: 100%;
        object-fit: contain;

    }

    .details.pt-5 {
        padding-left: 414px;
    }
    </style>
</head>

<body>
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
                                <li><a class="dropdown-item text-white-50 bg-dark" href="ClassRoutineView.php">Exam
                                        Routine</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        


    </header>
    <main>
        <div class="main-box">
            <h1 class="text-white text-center bg-dark mt-3">Admission Info</h1>
            <!-- <div class="main-box1">
                <img src="images/extra.jpg" alt="" srcset="">
            </div> -->
            <div>
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
            </div>
            <div class="info ps-5 ">
                <div class="bg-white pb-3">
                    Many of you are anxious about would you be able to get admission to the good college in HSC? It is
                    normal to think like this for those who did not get the GPA 5. In fact, there are so many GPA 5
                    holders in the country that it is difficult to get admission in a good college if the result is not
                    good. Moreover, the admission process will be based admitted on the result. However, it is good to
                    know how much GPA will be required to apply to different colleges. We would make you clear about the
                    College Wise GPA Requirement.
                </div>

                <div>
                    By reading this article you would be able to know which colleges you can apply for admission. We
                    will mention the different college names having different GPA requirements. If you have the idea
                    about the College Wise GPA requirement, it will be easier for you to arrange everything for the
                    application. Though the government fixed GPA requirement is same in all colleges of the whole
                    country, it is different for some of the famous and renowned colleges in Dhaka. So let us know how
                    much GPA will be needed to get admission in different colleges.
                </div>
                <div>
                    <h1 class="mt-3">GPA Recruitment for HSC</h1>
                    <ul>
                        <li>GPA 3.75 for humanities department</li>
                        <li> GPA 4.00 for Business Studies department</li>
                        <li>GPA 5.00 for Science department</li>
                    </ul>
                </div>


            </div>
            <div class="apply d-flex justify-content-center">
                <h1>Click to Apply</h1>

            </div>
            <div class="d-flex justify-content-center mb-5 ">
                <button type="button" name="Apply" value="Apply" class="btn btn-dark "> <a href="AdmissionApply.php"><span class="text-white text-decoration-none">Apply</span></a></button>
            </div>

            <footer>
                <div class="parent d-flex justify-content-around text-white-50 bg-dark pt-3 pb-3">
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
                        <h3 class="pb-1">Important Link</h3>
                        <h6><a href="">Bus Service Schedule</a></h6>
                        <h6><a href="ClassRoutineView.php">Exam Routine</a></h6>
                    </div>
                </div>



            </footer>


            

        </div>
    </main>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>