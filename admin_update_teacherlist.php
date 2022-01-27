<?php

include "conn.php";

    session_start();
    if(!isset($_SESSION['loggedin']  )){

    header("location:admin_login.php");
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
    <link rel="stylesheet" type="text/css" href="ad_list.css"> 

    <title>Update Teacher</title>
  </head>
  <body>

  <nav class="navbar navbar-dark nv2">
  <div class="container-fluid">
 
  <a class="navbar-brand fs-4 hed" href="#"><img class="im" src="picture/logo2.png" alt="logo">Quizi</a>


  <li class="dropdown d-flex justify-content-end dm">
          <a class="nav-link dropdown-toggle text-dark fw-bold fs-5 text-white " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="admin_panel.php">Dashboard</a></li>

            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="admin_logout.php">Logout</a></li>
          </ul>
        </li>
   
      </nav>

  
 





          <div class="row py-5">

          <div class="col-lg-6">

          <img class="img-fluid im2" src="picture/adtese3.jpg" alt="logo">

            
            </div>

            <div class="col-lg-6 mt-5 ">

            <?php


              if (isset($_GET['edit']) ) {        //get/post connection

                
                  $id=$_GET['edit'];


                $sql= "SELECT * FROM `teacher` WHERE id='$id'";  //select query
                $result=mysqli_query($conn,$sql);

              
                
              
                  while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                  {

                      $username= $row['username'];
                     
                    


                  }
                
              }

              ?>


              <?php

              if(isset($_POST['update'])){

                extract($_GET);   //get er value nie asa
                $username= $_POST['username'];
              
                    $existsql="SELECT * FROM `teacher` WHERE username='$username'";  //select methode for exist username
                    $result=mysqli_query($conn,$existsql);

                    $num=mysqli_num_rows($result);

                    if ($num>0) {               //if username exist
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">   
                      Username already exist! Can not update Username!!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                      }

              
                else{
               
                $sql="UPDATE `teacher` SET username = '$username' WHERE `teacher`.id = '$id'"; //Update query
                $result=mysqli_query($conn,$sql);

               

                if($result){

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Your Note is successfully updated to the list!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
                else{

                  echo "Failed";
                }


              }

            }


              ?>


            <div class="container mt-5 d-flex justify-content-center"> 

                    <form class="col1" method="post">

                    <h2 class="text-center my-4"> Update Username</h2>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" value="<?php echo $username;?>" class="form-control box" id="username" name="username" aria-describedby="emailHelp">
                        
                    </div>
                    <button type="submit" name="update" class="btn bt1">Update</button>
                    <a href="admin_teacherlist.php"class="btn bt3">View Table</a> 
                    </form>
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