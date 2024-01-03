<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QueryBox</title>
  <!-- css link -->
  <link rel="stylesheet" href="Css/QueryBox.css">
  <!-- bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
      .main {
        /* background: rgba(19, 18, 18, 0.15); */
        background: url(images/extra.jpg);
        background-size: cover;
        height: 100%;
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
          <ul class="navbar-nav  mb-2 mb-lg-0 fw-semibold">
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
                
                
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>
   
  </header>

  <main class="main">
    <div class="form-group">
        <form class="row g-3 needs-validation" novalidate>

            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Table 1 Name</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="default">
                    default
                  </option>
                  <option value="canteen">
                    canteen
                  </option>

                  <option value="orders">
                    orders
                  </option>
                  
                  <option value="department">
                  department
                  </option>
                  <option value="classroom">
                  classroom
                  </option>
                  <option value="section">
                  section
                  </option>
                  <option value="library">
                  library
                  </option>
                  <option value="section">
                  section
                  </option>
                  <option value="libraryaccess">
                  libraryaccess
                  </option>
                  <option value="payment">
                  payment
                  </option>
                  <option value="staff">
                  staff
                  </option>
                  <option value="student">
                  student
                  </option>
                  <option value="subject">
                  subject
                  </option>
                  <option value="teacher">
                  teacher
                  </option>
                  <option value="time_slot">
                  time_slot
                  </option>
                  <option value="usersettings">
                  usersettings
                  </option>
                  <option value="borrowed_books">
                  borrowed_books
                  </option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>



            <!-- <div class="col-md-4">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div> -->
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Attribute</label>
                <select class="form-select" id="validationCustom04" required>
                  <!-- 
                   
                  ?>-->
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>

            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Range</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
              
            </div>

            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Table 2 Name</label>
                <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="default">
                    default
                  </option>
                  <option value="canteen">
                    canteen
                  </option>

                  <option value="orders">
                    orders
                  </option>
                  
                  <option value="department">
                  department
                  </option>
                  <option value="classroom">
                  classroom
                  </option>
                  <option value="section">
                  section
                  </option>
                  <option value="library">
                  library
                  </option>
                  <option value="section">
                  section
                  </option>
                  <option value="libraryaccess">
                  libraryaccess
                  </option>
                  <option value="payment">
                  payment
                  </option>
                  <option value="staff">
                  staff
                  </option>
                  <option value="student">
                  student
                  </option>
                  <option value="subject">
                  subject
                  </option>
                  <option value="teacher">
                  teacher
                  </option>
                  <option value="time_slot">
                  time_slot
                  </option>
                  <option value="usersettings">
                  usersettings
                  </option>
                  <option value="borrowed_books">
                  borrowed_books
                  </option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>

              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Attribute</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>

              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Range</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required>
                
              </div>

             
                 

            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Query Method</label>
              <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            
            <div class="">
                <label for="exampleFormControlTextarea1" class="form-label">Query Box</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div >
            <div class="button d-flex justify-content-center align-items-center">
              <button class="btn btn-dark me-3" type="submit">Apply</button>
              <button class="btn btn-dark" type="submit">Refresh</button>
              <!-- <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div> -->
            
            <!-- <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div> -->
            </div>
          </form>
    </div>
<!-- table design -->
    <div class="table justify-content-center align-items-center">
      <table class="table table-hover">
        
          <thead>
            
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">2nd</th>
              <th scope="col">3rd</th>
              <th scope="col">4th</th>
              <th scope="col">5th</th>
              <th scope="col">6th</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="1">Larry the Bird</td>
              <td>@twitter</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
              
            </tr>
          </tbody>
        </table>
      

    </div>
  </main>



  


  <!-- Bootstrap js file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  

</body>

</html>