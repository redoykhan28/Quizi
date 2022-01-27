<?php

include "conn.php";

    session_start();
    if(!isset($_SESSION['loggedin']  )){

    header("location:teacher_login.php");
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
    <link rel="stylesheet" type="text/css" href="teacher_panel.css"> 

    <title>Update Profile Picture</title>
  </head>
  <body>

  <nav class="navbar navbar-light nv2">
  <div class="container-fluid">
 
  <a class="navbar-brand fs-4 hed" href="#"><img class="im" src="logo1.png" alt="picture/logo1">Quizi</a>


  <li class="dropdown d-flex justify-content-end dm">
          <a class="nav-link dropdown-toggle text-dark p-1 a1 " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          <?php

              $sql="SELECT * FROM `teacher`  WHERE username='".$_SESSION['username']."'";
              $result=mysqli_query($conn,$sql);





                while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                {
                  
                  

                  echo "<img class='img-fluid   imp' src='upload/".$row['image']."' alt='image'>";
                  echo "<p class='pr'>".$row['username']."</P>";
                  
                

                }
              ?>

        
        
        </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="teacher_profile.php"> Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tr_logout.php">Logout</a></li>
          </ul>
        </li>
   
      </nav>
      

                    <div class="container d-flex justify-content-center">


                    <div class="img">
                    <?php

                    $sql="SELECT * FROM `teacher`  WHERE username='".$_SESSION['username']."'";
                    $result=mysqli_query($conn,$sql);





                    while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                    {
                        
                        

                        echo "<img class='img-fluid mt-5 p-5   imf' src='upload/".$row['image']."' alt='image'>";
    
  

  }
?>





     </div>
  
 
     </div>




         

   


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