<?php

include "conn.php";

    session_start();
    if(!isset($_SESSION['loggedin']  )){

    header("location:student_login.php");
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="st_panel.css" class="css">
    <title>Welcome to Student Panel</title>
  </head>
  <body>

  <nav class="navbar navbar-dark nv2">
  <div class="container-fluid">
 
  <a class="navbar-brand fs-4 hed" href="#"><img class="im" src="picture/logo2.png" alt="logo">Quizi</a>


  <li class="dropdown d-flex justify-content-end dm">
          <a class="nav-link dropdown-toggle a1  p-1 text-white " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

          <?php
              $user=$_SESSION['username'];
              $sql="SELECT * FROM `student`  WHERE username='$user'";
              $result=mysqli_query($conn,$sql);





                while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                {
                  
                  

                  echo "<img class='img-fluid   imp' src='upload/".$row['image']."' alt='image'>";
                  echo "<p class='pr '>".$row['username']."</P>";
                  
                

                }
              ?>

          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="student_dp_update.php?edit=
            
            <?php //select query for profile picture update
                
                $user= $_SESSION['username'];
                $sql="SELECT * FROM `student`  WHERE username='$user'";
                $result=mysqli_query($conn,$sql);
  
  
  
  
  
                  while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                  {
                    
                    
                    echo $row['id'];
                    
                  
  
                  }
            
            
         ?>"
            
            
            
            
            >Update Profile Picture</a></li>
            <li><a class="dropdown-item" href="student_profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="st_logout.php">Logout</a></li>
          </ul>
        </li>
   
      </nav>
      

      <div class="row r1">
     
     

          <div class="col-lg-2 col1  ">

 

              <img class="img-fluid aim rounded mx-auto d-block mt-5 " src="picture/stpanel.png" alt="Logo">
              <h4 class="my-3 text-center">Student</h4>

              <div class="vertical-menu ">
                <a href="#" class="active"><img class="img-fluid imd" src="picture/dash.png" alt="">Dashboard </a>
                <a href="st_teacherlist.php"><img class="img-fluid imd" src="picture/tr.png" alt="">Teacher</a>
                <a href="st_studentlist.php"><img class="img-fluid imd" src="picture/stu.png" alt="">Student</a>
                <a href="#"><img class="img-fluid imd" src="picture/xm.png" alt="">Examination</a>
                <a href="#"><img class="img-fluid imd" src="picture/course.png" alt="">Course</a>
                <a href="#"><img class="img-fluid imd" src="picture/logo1.png" alt="">About Us</a>
                <a href="#"><img class="img-fluid imd" src="picture/phn.png" alt="">Contact</a>
              </div>

              


        </div>

        <div class="col-lg-10 mt-5">

        <div class="alert alert-light mt-2 mod" role="alert">
              <h3>Student Dashboard</h3>
              <h3 class="alert-heading">Welcome <?php echo $_SESSION['username'];  ?></h3>
              <h6>You are logged in as a  Student Of this Panel!!</h6>
              <hr>
              <p class="mb-0">“Success consists of going from failure to failure without loss of enthusiasm....”</p>
            </div>

            <div class="row p-4 d-flex justify-content-start">

              <div class="col-lg-3 mx-3 ">

              <div class="card text-dark card1 mb-3" style="max-width: 22rem;">
              
                <div class="card-body">
                  <h5 class="card-title"><img class="img-fluid imd cardicon1 rounded mx-auto d-block" src="picture/sttr.png" alt=""></h5>
                  <a  class="text-decoration-none" href="st_teacherlist.php"> <h3 class="card-text card1txt">Total Teacher  &nbsp

                  <?php



                      $sql="SELECT * FROM `teacher`"; //showing num of row
                      $result=mysqli_query($conn,$sql);

                      $num=mysqli_num_rows($result);
                      echo   $num;


                      ?>



                  </h3></a>
                </div>
              </div>
              </div>

              <div class="col-lg-3 mx-3 ">

              <div class="card text-dark card1 mb-3" style="max-width: 22rem;">
              
                <div class="card-body">
                  <h5 class="card-title"><img class="img-fluid imd cardicon1 rounded mx-auto d-block" src="picture/stst.png" alt=""></h5>
                  <a  class="text-decoration-none" href="st_studentlist.php"> <h3 class="card-text card1txt">Total Student  &nbsp

                  <?php



                      $sql="SELECT * FROM `student`"; //showing num of row
                      $result=mysqli_query($conn,$sql);

                      $num=mysqli_num_rows($result);
                      echo   $num;


                      ?>

                  </h3></a>
                </div>
              </div>
              </div>

              <div class="col-lg-3 mx-3 ">

              <div class="card text-dark card1 mb-3" style="max-width: 22rem;">
              
                <div class="card-body">
                  <h5 class="card-title"><img class="img-fluid imd cardicon1 rounded mx-auto d-block" src="picture/stcourse.png" alt=""></h5>
                  <a  class="text-decoration-none" href="studentcourse.php">  <h3 class="card-text card1txt">Total Course &nbsp

                      <?php



                          $sql="SELECT * FROM `catagory`"; //showing num of row
                          $result=mysqli_query($conn,$sql);

                          $num=mysqli_num_rows($result);
                          echo   $num;


                          ?>

                  </h3></a>
                </div>
              </div>
              </div>

              <div class="col-lg-3 mx-3 ">

              <div class="card text-dark card1 mb-3" style="max-width: 22rem;">
              
                <div class="card-body">
                  <h5 class="card-title"><img class="img-fluid imd cardicon1 rounded mx-auto d-block" src="picture/stedu.png" alt=""></h5>
                  <a  class="text-decoration-none" href="givexm.php"> <h3 class="card-text card1txt">Give Exam</h3></a>
                </div>
              </div>

            </div>

            <div class="col-lg-3 mx-3 ">

                  <div class="card text-dark card1 mb-3" style="max-width: 22rem;">

                    <div class="card-body">
                      <h5 class="card-title"><img class="img-fluid imd cardicon1 rounded mx-auto d-block" src="picture/stachive.png" alt=""></h5>
                      <a  class="text-decoration-none" href="#"> <h3 class="card-text card1txt">My Achivement</h3></a>
                      
                    </div>
                  </div>

                  </div>
              </div>

              


            </div>

            </div>
           



            </div>

            

        </div>

        
        <footer class="py-1">

</div>

    <p class="text-center text-light  my-3">© Copyright 2020 Quizi-Master in any subject | Developed by IT Office, Quizi.</p>

    </div>

</footer>
    




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>