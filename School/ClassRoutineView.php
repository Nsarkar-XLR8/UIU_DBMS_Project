<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-Routine</title>
    <link rel="stylesheet" href="Css/classroutine.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    .main-box {
        position: relative;
        background: url(images/extra.jpg) right no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;

    }

    .table-design {
        margin-right: auto;
        margin-left: auto;
        width: 900px;
        padding: 30px;
    }
    </style>


</head>

<body>
    <header>
        <!-- navbar -->
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
                                <li><a class="dropdown-item text-white-50 bg-dark " href="admindashBoard.php">
                                        Dashboard </a></li>
                                <!-- <li><a class="dropdown-item text-white-50 bg-dark" href="Library.php">Library</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-white-50 bg-dark" href="Canteen.php">Canteen</a></li> -->
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="main-box">




            <!-- table design -->
            <div class="table-design">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Department</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Section</th>
                            <th scope="col">Date</th>
                            <th scope="col">Room</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $conn = new mysqli('localhost','root','','ucms');
        
                            if(!$conn){
                            echo "Not Connected";
                            }
                            
                            
                            $sql = "SELECT * FROM routine WHERE  1";
                            $result = $conn->query($sql);
                        
                            if ($result->num_rows > 0) {
                                echo "<h3 style='text-align:center  ; margin-top:15px'>Exam Routine</h3>";
     
                                while ( $data = $result->fetch_assoc()) {
                                    $Department =  $data['Department'];
                                    $Subject = $data['Subject'];
                                    $Section = $data['Section'];
                                    $Date = $data['Date'];
                                    $Room = $data['Room'];  
                                        
                                
                                    echo "<tr>
                                        
                                            <td> $Department</td> 
                                            <td> $Subject</td>  
                                            <td> $Section</td>  
                                            <td> $Date</td>  
                                            <td> $Room</td>  
                                            
                                    
                                        </tr>";
                                
                                }
                                echo "</table>"; 
                            } 
                                
                        ?>


                    </tbody>
                </table>
            </div>

        </div>
        </div>
    </main>



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>
</body>

</html>