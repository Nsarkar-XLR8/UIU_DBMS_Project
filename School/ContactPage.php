      




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Page</title>
<!-- css link -->
 <link rel="stylesheet" href="Css/ContactPage.css">
    <!-- font link -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<style>
  .img {
    padding-left: 10px;
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
</style>
<body>
 <!-- Nav design -->
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item">
              <a class="dropdownItem" href="admin.php">Admin</a> </a></li>
            <li><a class="dropdown-item" href="Canteen.php">Canteen</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="Library.php">Library</a></li>
          </ul>
        </li>

      </ul>

    </div>
  </div>
</nav>

    <section class="contact d-flex ">
      <div class="contact-form">
         <h1>Contact <span>US</span></h1>
         <h6>We would love to response to your queries and help you succeed . <br>Feel free to get in touch with us </h6>
         <form action="ContactPage.php" method="post">
            <input type="text" name="name" placeholder="YourName" required>
            <input type="email" name="email" id="" placeholder="Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea type="text"  name="AreaText" id="" cols="30" rows="10" placeholder="your message" required>

            </textarea>
            <input type="submit" name="submit" value="submit" class="btn">

                <?php



                          session_start();
                         if(isset($_POST['submit'])){
 
                          
                          $Your_Name = $_POST['name'];
                          $Email = $_POST['email'];
                          $Subject = $_POST['subject'];
                          $AreaText = $_POST['AreaText'];



                          $_SESSION['name'] = $Your_Name;
                          $_SESSION['email'] = $Email;
                          $_SESSION['subject'] = $Subject;
                          $_SESSION['AreaText'] = $AreaText;

                          echo "<script>window.location.href='ViewComment.php'</script>"  ;
                          







                          
                         
                        }


                ?>

         </form>
      </div>
      <!-- img design -->
      <div class="contact-img d-flex justify-content-evenly bg-transparent">
        
        <div class="img">
            <img src="images/sharker.jpg">
            <h6>Nayem Sarkar</h6>
            <h6>nsarkar203032@bscse.uiu.ac.bd</h6>
            <img src="images/shefa.jpg">
            <h6>Taslima Ifnath</h6>
            <h6>tifnath203055@bscse.uiu.ac.bd</h6>
        </div>
        <div class="img">
            <img src="images/EFTI2.jpg" alt="">
            <h6>Nur Hossain Rabbi</h6>
            <h6>nrabbi203016@bscse.uiu.ac.bd</h6>
            <img src="images/syed2.jpg" alt="" srcset="">
            <h6>Abu Syed bokachoda</h6>
            <h6>asaid202332@bscse.uiu.ac.bd</h6>
        </div>
      </div>
      
      <!-- <div class="grid gap-0 row-gap-3 contact-img">
        <div class="p-2 g-col-6"><img src="images/sharker.jpg" alt="" srcset=""></div>
        <div class="p-2 g-col-6"><img src="images/shefa.jpg" alt="" srcset=""></div>
        <div class="p-2 g-col-6"><img src="images/Efty.jpg" alt="" srcset=""></div>
        
      </div> -->
      
    </section>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>