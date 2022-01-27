<?php

include "conn.php";     //connection db

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Animation Cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_login.css" class="css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" class="css">

    <title>Admin Login</title>
  </head>
  <body>
   

  <nav class="navbar navbar-light nv2">
  <div class="container-fluid">
  <a class="navbar-brand fs-2 hed" href="#"><img class="im" src="picture/logo1.png" alt="logo">Quizi</a>
    <ul class="d-flex">
      <a class="text-decoration-none fs-3  text-dark px-3" href="main.php">X</a>
    </ul>
  </div>
    </nav>

        
        
        <div class="row cbg">

                    <div class="col-lg-6">

                        <img class="img-fluid im1" src="picture/work.jpg" alt="logo">


                    </div>



            <div class="col-lg-6  my-5" data-aos="zoom-in">

     
            
                
            <?php
  
              if(isset($_POST['login'])){                //post methode

                  $username=$_POST['username'];
                  $password=$_POST['password'];
                
                  
            

                  $sql="SELECT * FROM `admin` WHERE username='$username' and password='$password'";   //select for match giver passsword
                    $result=mysqli_query($conn,$sql);

                      $num=mysqli_num_rows($result);
                      
                    
                  if ($num) {

                  

                    session_start();     //session start for login
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$username;
                    header("location:admin_panel.php");  //locate the location 
        

                }

                    else{

                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Invalid username or password!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        
                    }
                  
                  }                
                
  
  ?>

                
                        

                <div class="container mt-5 d-flex justify-content-center">

                        <form action="" method="post">                           <!-- Login table -->

                        <h2 class="text-center my-4"> Admin LogIn</h2>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <i class="fa fa-eye " aria-hidden="true" id="eye" onclick="toggle1()"></i> 
                        </div>

                        <script>
                            
                            var state=false;            //js code
                            function toggle1(){

                                if (state) {
                                    document.getElementById("password").
                                    setAttribute("type","password");
                                    state=false;
                                    document.getElementById("eye").style.color='black';
                                }

                                else{

                                    document.getElementById("password").
                                    setAttribute("type","text");
                                    state=true;
                                    document.getElementById("eye").style.color='#F99174';
                                }
                            }
                        </script>



                        <button type="submit" name="login" class="btn  bb2">LogIn</button>
                        </form>

                        </div>

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

    
    <!-- Animation Cdn -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 300,
        duration: 1000
    });
  </script>

  </body>
</html>