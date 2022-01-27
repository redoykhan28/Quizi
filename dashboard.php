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
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="st_list.css"> 
    
  <title>Give exam</title>
  </head>
  <body>
  

  <nav class="navbar navbar-dark nv2">
  <div class="container-fluid">
 
  <a class="navbar-brand fs-4 hed" href="#"><img class="im" src="picture/logo2.png" alt="logo">Quizi</a>

      <li class="dropdown  d-flex justify-content-end dm">
          <a class="nav-link dropdown-toggle text-light a1  p-1    " href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
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
          <li><a class="dropdown-item" href="student_panel.php">Dashboard</a></li>


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
        </div>
      </nav>




                       <div class="row p-5">
                       <div class="col-lg-12  text-right">
              
                                    <ul class="breadcome-menu">
                                        <li><div id="countdowntimer" style="display: block;"></div>
                                        </li>

                                        
                                </div>

                       </div>

                        
                      


               

                    


          



              
    <script type="text/javascript">
    setInterval(function(){
        timer();
    },1000);
    function timer()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                if(xmlhttp.responseText=="00:00:01")
                {
                    window.location="result.php";
                }

                document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;

            }
        };
        xmlhttp.open("GET","forajax/load_timer.php",true);
        xmlhttp.send(null);
    }

    </script>
   
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 
  </body>
</html>