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
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="ques.css"> 
    
  <title>Manage Exam</title>
  </head>
  <body>
  

  <nav class="navbar navbar-light nv2">
  <div class="container-fluid">
 
  <a class="navbar-brand fs-4 hed" href="#"><img class="im" src="picture/logo1.png" alt="logo">Quizi</a>

      <li class="dropdown d-flex justify-content-end dm">
          <a class="nav-link dropdown-toggle text-dark a1 p-1 " href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          <?php
              $user=$_SESSION['username'];
              $sql="SELECT * FROM `teacher`  WHERE username='$user'";
              $result=mysqli_query($conn,$sql);





                while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                {
                  
                  

                  echo "<img class='img-fluid   imp' src='upload/".$row['image']."' alt='image'>";
                  echo "<p class='pr'>".$row['username']."</P>";
                  
                

                }
              ?>

        
        
        </a>
          

          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="teacher_panel.php">Dashboard</a></li>


            <li><a class="dropdown-item" href="teacher_dp_update.php?edit=
            
            <?php //select query for profile picture update
                
                $user= $_SESSION['username'];
                $sql="SELECT * FROM `teacher`  WHERE username='$user'";
                $result=mysqli_query($conn,$sql);
  
  
  
  
  
                  while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
                  {
                    
                    
                    echo $row['id'];
                    
                  
  
                  }
            
            
         ?>"
            
            
            
            
            >Update Profile Picture</a></li>
            <li><a class="dropdown-item" href="teacher_profile.php" >Profile</a></li>

            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tr_logout.php">Logout</a></li>
          </ul>
        </li>
        </div>
      </nav>





               <div class="row r1">

                <div class="col-lg-6 cl2">

                <?php

                if (isset($_POST['Add'])) {        //get/post connection

                    $name=$_POST['name'];
                    $time= $_POST['time'];


                $sql= "INSERT INTO `catagory` ( `name`, `time`) VALUES ( '$name', '$time')";     // insertion
                $result=mysqli_query($conn,$sql);

                if($result){

                    echo '<div class="alert alert-success alert-dismissible fade show my-5" role="alert">
                    Your Note is successfully Added to the list!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else{

                    echo"insert failed ..this is error".mysqli_error($conn);
                }
                }

                ?>
                <div class="container my-5">

                <h2 class="text-white">Add Exam</h2>

                <form action="" method="post">


                    <div class="mb-3">
                    <label for="title" class="form-label text-dark">Exam Name</label>
                    <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="name" name="name"  aria-describedby="emailHelp">
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="title" class="form-label text-dark">Exam Time In Minutes</label>
                        <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="time" name="time"  aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" name="Add" class="btn  bt3">Add Exam</button>
                </form>




                </div>
               
                </div>

                <div class="col-lg-6 cl1 px-5">

                <?php    
                
                if (isset($_GET['delete'])) {        //get/post connection

                  $id=$_GET['delete'];
                
                  $sql= "DELETE FROM  `catagory` WHERE id ='$id'";     // deletation
                  $result=mysqli_query($conn,$sql);
                  if ($result) {
                    
                    echo '<div class="alert alert-danger alert-dismissible fade show my-5 " role="alert">
                  Student removed!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                
                }
                  
                else{

                    echo"insert failed ";
                }

                }

            ?>

               
                <h3 class="text-center"><img class="img-fluid imm" src="picture/coursetrcard.png" alt="">Exam List</h3>
                 <hr>
                
                <table class="table table-responsive pt-3   table-hover text-center " id="myTable">
                  
                <thead class="tt1 text-white">
                  
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                
                <?php

                  $sql="SELECT * FROM `catagory`"; 
                                                        //selecting operation from db
                  $result=mysqli_query($conn,$sql);
                 

                         
                          
                          while($row=mysqli_fetch_assoc($result))://mysqli_fetch_assoc($result)=fetch data from db 
                          
                          
                          ?> 
                            
                            
                            
                              <tr>
                              <th scope='row'><?php echo $row ['id'];?></th>
                              <td><?php echo $row ['name'];?></td>            <!--real rules of select/update/delete query-->
                             
                              <td>
                              <a href="addxm.php?delete=<?php echo $row['id'];?>"
                              class="btn bt2">Delete</a> 
                              </td>
                              </tr>
                              
                         
                           
                           
                          
                            <?php 
                            
                         

                            endwhile 
                            ?>
                        
                           
                 
                
                 
                </tbody>
              </table>

              <hr>

                            


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
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    
    <script>

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

    </script>

<script>




</script>
  </body>
</html>