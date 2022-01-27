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
    <link rel="stylesheet" href="teacher_login.css" class="css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" class="css">

    <title>Teacher Login</title>
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

    
  
            <div class="row cp">

                    <div class="col-lg-6">

                        <img class="img-fluid im2" src="picture/p.jpg" alt="logo">


                    </div>



            <div class="col-lg-6  my-4"  data-aos="zoom-in">


        <?php                                                               //for signup
            
            if(isset($_POST['signup'])){        //post methode

                $username=$_POST['username'];
                $email=$_POST['email'];
                $image=$_FILES['image']['name'];
                $tmp_name=$_FILES['image']['tmp_name'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
               
                    $existsql="SELECT * FROM `teacher` WHERE username='$username'";  //select methode for exist username
                    $result=mysqli_query($conn,$existsql);

                    $num=mysqli_num_rows($result);


                     if ($num>0) {               //if username exist
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">   
                        Username already exist!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        }
                    
                    else{
                            
                            if($password==$cpassword){  //if pass=cpass match 
                        
                            $hash=password_hash($password,PASSWORD_DEFAULT);
                            $sql="INSERT INTO `teacher` ( `username`, `password`,`email`,`image`, `date`) VALUES ( '$username', '$hash','$email','$image', current_timestamp())";
                            $result=mysqli_query($conn,$sql);

                            if ($result) { //if data insert
                            
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            You are successfully SignUp!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';

                            move_uploaded_file($tmp_name,"upload/$image");

                            }
                            else{               //if data not insert
                    
                                 echo "insert failed ..this is error".mysqli_error($conn);
                            }
                    
                    
            
                }

                else {   //if password dosent match
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password missmatch!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';;
                }

           

            
            }

        }
        
                
            ?>
        
        <?php                                                                           //for login
                if(isset($_POST['login'])){       //post methode

                    $username=$_POST['username'];
                    $password=$_POST['password'];

                    $sql="SELECT * FROM `teacher` WHERE username='$username'"; 
                    $rs=mysqli_query($conn,$sql);

                    $num=mysqli_num_rows($rs);
                    

                    if ($num == 1) {
                    while ($row=mysqli_fetch_assoc($rs)) {

                        if (password_verify($password,$row['password'])) {
                            
                            session_start();     //session start for login
                            $_SESSION['loggedin']=true;
                            $_SESSION['username']=$username;
                            header("location:teacher_panel.php");  //locate the location 

                        }

                        else{

                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Invalid username or password!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';

                        }

                }

                        
                }

                else{

                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid username or password!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';

                    }

                    }




                ?>
            

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active mx-3 fw-bold tb1" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sign Up</button>
                    <button class="nav-link mx-3 fw-bold tb2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Log In</button>

                </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                         <div class="container  d-flex justify-content-center">
                        
                        <form action="" method="post" enctype="multipart/form-data">      <!-- signup table -->

                        <h2 class="text-center my-4"> Teacher Signup</h2>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                            
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 box">
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
                                    document.getElementById("eye").style.color='#748B3B';
                                }
                            }
                        </script>

                        <div class="mb-3 box">
                           
                            <label for="cpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                            <i class="fa fa-eye " aria-hidden="true" id="eye2" onclick="toggle2()"></i>

                        </div>

                        <script>
                            
                            var state=false;                //js code
                            function toggle2(){

                                if (state) {
                                    document.getElementById("cpassword").
                                    setAttribute("type","password");
                                    state=false;
                                    document.getElementById("eye2").style.color='black';
                                }

                                else{

                                    document.getElementById("cpassword").
                                    setAttribute("type","text");
                                    state=true;
                                    document.getElementById("eye2").style.color='#748B3B';
                                }
                            }
                        </script>

                        

                        <button type="submit" name="signup" class="btn bb">SignUp</button>
                        </form>

                        
            </div>



                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 

                <div class="container  mt-5 d-flex justify-content-center"> 


                <div class="container mt-5 d-flex justify-content-center">

                        <form action="" method="post">                           <!-- Login table -->

                        <h2 class="text-center my-4"> Teacher LogIn</h2>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password2" name="password">
                            <i class="fa fa-eye ff " aria-hidden="true" id="eye3" onclick="toggle3()"></i>
                        </div>

                        <script>
                            
                            var state=false;                //js code
                            function toggle3(){

                                if (state) {
                                    document.getElementById("password2").
                                    setAttribute("type","password");
                                    state=false;
                                    document.getElementById("eye3").style.color='black';
                                }

                                else{

                                    document.getElementById("password2").
                                    setAttribute("type","text");
                                    state=true;
                                    document.getElementById("eye3").style.color='#748B3B';
                                }
                            }
                        </script>



                        <button type="submit" name="login" class="btn bb2">LogIn</button>
                        </form>

                        </div>


                        

            </div>


                </div>
                
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