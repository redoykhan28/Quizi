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
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="ad_list.css"> 
    
  <title>Teacher Data</title>
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

</div>



               <div class="row r1">

             



                <div class="col-lg-8 cl1 px-5">

                <?php    
                
                if (isset($_GET['delete'])) {        //get/post connection

                  $id=$_GET['delete'];
                
                  $sql= "DELETE FROM  `teacher` WHERE id ='$id'";     // deletation
                  $result=mysqli_query($conn,$sql);
                  if ($result) {
                    
                    echo '<div class="alert alert-danger alert-dismissible fade show " role="alert">
                  Teacher removed!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                
                }
                  
                else{

                    echo"insert failed ";
                }

                }

            ?>

<h3 class="text-center"><img class="img-fluid imm" src="picture/cm2.png" alt="">Teacher List</h3>
                 <hr>
                
                <table class="table table-responsive pt-3 table-hover text-center " id="myTable">
                  
                <thead class="tt1 text-white">
                  
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                
                <?php

                  $sql="SELECT * FROM `teacher`"; 
                                                        //selecting operation from db
                  $result=mysqli_query($conn,$sql);
                 

                         
                          
                          while($row=mysqli_fetch_assoc($result))://mysqli_fetch_assoc($result)=fetch data from db 
                          
                          
                          ?> 
                            
                            
                            
                              <tr>
                              <th scope='row'><?php echo $row ['id'];?></th>
                              <td><?php echo $row ['username'];?></td>
                              <td><?php echo $row ['email'];?></td>                <!--real rules of select/update/delete query-->
                              <td> <img class="img-fluid iml" src="upload/<?php echo $row ['image'];?>" alt="image"></td>  
                              <td>
                              <a href="admin_update_teacherlist.php?edit=<?php echo $row['id'];?>"
                              class="btn bt1">Update</a> 
                             
                              <a href="admin_teacherlist.php?delete=<?php echo $row['id'];?>"
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


                  <div class="col-lg-4 cl2">

                  <img class="img-fluid im1 mt-5" src="picture/admin.gif" alt="logo">
                      

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