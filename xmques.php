<?php

include "conn.php";

    session_start();
    if(!isset($_SESSION['loggedin']  )){

    header("location:student_login.php");
    exit;
}


$id=$_GET["id"];
$catagory='';
$sql="SELECT * FROM `catagory`  WHERE id='$id'";
$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {
    $catagory=$row["name"];
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
    
  <title>Student Data</title>
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

                    <div class="container">
                    <div class="row r1">



                    <div class="col-lg-8 cl1 px-5">


                    <h2 class="text-dark my-3">Course Name: <?php echo"<font color='blue'>".$catagory."</font>"; ?></h2>
                    <hr>




                    <?php

                

                   

                    $sql="SELECT * FROM addques where catagory='$_SESSION[catagory]'"; 
                                                            //selecting operation from db
                    $result=mysqli_query($conn,$sql);
                    

                            
                            
                            while($row=mysqli_fetch_assoc($result))://mysqli_fetch_assoc($result)=fetch data from db 
                            
                            
                            
                            ?> 
                                
                                
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action active my-3" aria-current="true">
                                    <?php echo $row ['question'];?>
                                    </button>
                                    
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    <?php echo $row ['op1'];?>
                                    </label>
                                    </div>
                                    
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    <?php echo $row ['op2'];?>
                                    </label>
                                    </div>
                                    
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    <?php echo $row ['op3'];?>
                                    </label>
                                    </div>
                                    
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    <?php echo $row ['op4'];?>
                                    </label>
                                    </div>
                                
                            
                            
                                
                            
                            
                        
                            
                                <?php 
                                
                            

                                endwhile 
                                ?>
                            
                            
                    

                    
                    </tbody>
                    </table>

                    <hr>
                            
                    

                    
                    </tbody>
                    </table>



                                




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