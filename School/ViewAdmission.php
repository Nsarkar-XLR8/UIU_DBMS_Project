<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-AdmissionPage</title>


    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
          .main-box{
        position: relative;
        background: url(images/extra.jpg) right no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
     
    }

    .school-img1 img{
    width: 45px;
    height: 40px;
          border-radius: 35px;
      }
      ul.dropdown-menu.show {
        position: relative;
        left: -71px;
    }
    span{
        color: #f9004d;
        
      }

    </style>

</head>
<body>
    <header>
        <!-- navbar -->
        <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
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
               <li><a class="dropdown-item text-white-50 bg-dark" href="Canteen.php">Dashboard</a></li>
              </ul>
            </li>

          </ul>

        </div>
      </div>
      </nav>
    </header>



    <main>
        <div class="main-box">
            

        </div>
    </main>
    


<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>