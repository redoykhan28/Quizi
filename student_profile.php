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
  <link rel="stylesheet" href="st_profile.css" class="css">
    <title>Your Profile</title>
  </head>
  <body>

  <nav class="navbar navbar-dark nv2">
  <div class="container-fluid">
 
  <a class="navbar-brand fs-4 hed" href="#"><img class="im" src="picture/logo2.png" alt="logo">Quizi</a>

      <li class="dropdown d-flex justify-content-end dm">
          <a class="nav-link dropdown-toggle text-light a1 p-1  " href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          <?php
              $user=$_SESSION['username'];
              $sql="SELECT * FROM `student`  WHERE username='$user'";
              $result=mysqli_query($conn,$sql);





                while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                {
                  
                  

                  echo "<img class='img-fluid   imp' src='upload/".$row['image']."' alt='image'>";
                  echo "<p class='pr'>".$row['username']."</P>";
                  
                

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
            <li><a class="dropdown-item" href="#" >Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="st_logout.php">Logout</a></li>
          </ul>
        </li>
        </div>
      </nav>
      

     <div class="row p-5">


                    <div class="col-lg-6 d-flex justify-content-center">

                    <img class="img-fluid im2" src="picture/sst.gif" alt="logo">

                    </div>


                    <div class="col-lg-6 co1">
                   
                <div class="container-fluid mt-4 d-flex justify-content-center">

                <div class="card mt-5 cr " style="width: 25rem;">
                <a class="ap d-flex justify-content-center pt-5" href="st_imageview.php">


                    <?php
                            $user=$_SESSION['username'];
                            $sql="SELECT * FROM `student`  WHERE username='$user'";
                            $result=mysqli_query($conn,$sql);





                              while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                              {
                                
                                

                                echo "<img class='img-fluid img-rounded text-center impro' src='upload/".$row['image']."' alt='image'>";
                                
                                
                              

                              }
                            ?>

                    </a>


                <div class="card-body mt-2">
                  <h5 class="card-title text-center">My Profile</h5>         
                </div>

                <ul class="list-group list-group-flush">

                <?php                                                //profile card
    
                  $user= $_SESSION['username'];
                  $sql="SELECT * FROM `student`  WHERE username='$user'";
                  $result=mysqli_query($conn,$sql);





                  while($row=mysqli_fetch_assoc($result)):

                    ?>

                  <li class="list-group-item"><?php echo "<b>ID:</b> &nbsp" .$row['id'];?></li>
                  <li class="list-group-item"><?php echo "<b>Name:</b> &nbsp" .$row['username'];?></li>
                  <li class="list-group-item"><?php echo "<b>Email:</b> &nbsp" .$row['email'];?></li>
                  <li class="list-group-item"><?php echo "<b>Joining:</b> &nbsp" .$row['date'];?></li>

                  <?php

                  endwhile;
                
                ?>
               
              </ul>
                <div class="card-body mt-2">
                <a href="
                 
                 student_update.php?edit=
            
                            <?php //select query for update
                                
                                $user= $_SESSION['username'];
                                $sql="SELECT * FROM `student`  WHERE username='$user'";
                                $result=mysqli_query($conn,$sql);
                
                
                
                
                
                                while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                                {
                                    
                                    
                                    echo $row['id'];
                                    
                                
                
                                }
                            
                            
                        ?>
                 
                 
                 "><button type="submit" name="update" class="btn bt1  ">Update</button></a> 
                 <a class="btn bt2 my-2 " href="student_panel.php">Dashboard</a>

                </div>
              </div>



                </div>
                
               
                

</div>
                    

</div>
    
        
        <footer class="py-1">



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