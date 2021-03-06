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
    <link rel="stylesheet" type="text/css" href="st_panel.css"> 

    <title>Update Profile Picture</title>
  </head>
  <body>

  <nav class="navbar navbar-dark nv2">
  <div class="container-fluid">
 
  <a class="navbar-brand fs-4 hed" href="#"><img class="im" src="picture/logo2.png" alt="logo">Quizi</a>


  <li class="dropdown d-flex justify-content-end dm">
          <a class="nav-link dropdown-toggle text-light a1  p-1  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          <?php

              $sql="SELECT * FROM `student`  WHERE username='".$_SESSION['username']."'";
              $result=mysqli_query($conn,$sql);





                while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                {
                  
                  

                  echo "<img class='img-fluid   imp' src='upload/".$row['image']."' alt='image'>";
                  echo "<p class='pr'>".$row['username']."</P>";
                  
                

                }
              ?>

        
        
        </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="student_profile.php"> Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="st_logout.php">Logout</a></li>
          </ul>
        </li>
   
      </nav>
      

  
 





          <div class="row py-5">

          <div class="col-lg-6 d-flex justify-content-center">

          <img class="img-fluid im2" src="picture/stdp.gif" alt="logo">

            
            </div>

            <div class="col-lg-6 my-5  ">

            <?php


              if (isset($_GET['edit']) ) {        //get/post connection

                
                  $id=$_GET['edit'];
                 

              
                $sql= "SELECT * FROM `student` WHERE id='$id'";  //select query
                $result=mysqli_query($conn,$sql);

              
                
              
                while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                { 
                 

                      
                        
                    
                        $id=$row['id'];
                        $image=$row['image'];
                     
                    

                }
                
                
              }

              ?>


              <?php

              if(isset($_POST['update'])){

                extract($_GET);   //get er value nie asa
                
                
                
                $nimage=$_FILES['image']['name'];
                $ntmp_name=$_FILES['image']['tmp_name'];

                if(empty($nimage)){

                  $nimage=$image;

                }
               
              
                $sql="UPDATE `student` SET  image='$nimage' WHERE `student`.id = '$id'"; //Update query
                $result=mysqli_query($conn,$sql);

               

                if($result){

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Your Profile Picture Uploaded Sucessfully!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';

                  move_uploaded_file($ntmp_name,"upload/$nimage");
                }
                else{

                  echo "Failed";
                }


              }

            


              ?>


          
                <div class="container my-5 d-flex justify-content-center">
                        
                        <form action="" method="post" enctype="multipart/form-data">      <!-- signup table -->

                        <h2 class="text-center my-4">Upload a profile Picture</h2>
                       
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Image</label>
                            
                            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
                        </div>

                      
                        

                        <button type="submit" name="update" class="btn bt1">Update</button>
                           <a class="btn bt2" href="student_panel.php">Dashboard</a>

                        
                    </div>
                   
                    </form>
                    </div>

            
            </div>

         
            </div>

    <footer class="py-1">

        </div>

    <p class="text-center text-light  my-3">?? Copyright 2020 Quizi-Master in any subject | Developed by IT Office, Quizi.</p>

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