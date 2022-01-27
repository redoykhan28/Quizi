<?php

include "conn.php";


    session_start();
    if(!isset($_SESSION['loggedin']  )){

    header("location:teacher_login.php");
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

                if (isset($_POST['save'])) {        //get/post connection


                  $loop=0;

                  $count=0;

                  $res=mysqli_query($conn,"select * from addques where catagory='$catagory'")or die(mysqli_error($conn));

                  $count=mysqli_num_rows($res);

                  if($count==0)
                  {


                  }

                  else{

                    while($row=mysqli_fetch_assoc($res)){

                      $loop=$loop+1;
                      mysqli_query($conn,"update addques set question_no='$loop' where sl=$row[sl]");
                    }
                  }

                  $loop=$loop+1;
                    
                    $question= $_POST['question'];
                    $op1= $_POST['op1'];
                    $op2= $_POST['op2'];
                    $op3= $_POST['op3'];
                    $op4= $_POST['op4'];
                    $answer= $_POST['answer'];
                   




                $sql= "INSERT INTO addques VALUES (NULL,'$loop','$_POST[question]','$_POST[op1]','$_POST[op2]','$_POST[op3]','$_POST[op4]','$_POST[answer]','$catagory')";     // insertion
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

                <?php //for image box

                if (isset($_POST['submit'])) {        //get/post connection

                    
                    $question= $_FILES['question']['name'];
                    $tmp_name=$_FILES['question']['tmp_name'];
                    $op1= $_POST['op1'];
                    $op2= $_POST['op2'];
                    $op3= $_POST['op3'];
                    $op4= $_POST['op4'];
                    $answer= $_POST['answer'];
                  




                $sql= "INSERT INTO addques VALUES (NULL,'$_POST[question]','$_POST[op1]','$_POST[op2]','$_POST[op3]','$_POST[op4]','$_POST[answer]','$catagory')";     // insertion
                $result=mysqli_query($conn,$sql);

                if($result){

                    echo '<div class="alert alert-success alert-dismissible fade show my-5" role="alert">
                    Your Note is successfully Added to the list!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';

                    move_uploaded_file($tmp_name,"upload/$question");

                }
                else{

                    echo"insert failed ..this is error".mysqli_error($conn);
                }
                }

                ?>



      <?php  //for text box

      if (isset($_POST['save2'])) {        //get/post connection

          
          $question= $_POST['question'];
          $op1= $_POST['op1'];
         
        




      $sql= "INSERT INTO addques VALUES (NULL,'$_POST[question]','$_POST[op1]','','','','','$catagory')";     // insertion
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


            <?php    
                
                if (isset($_GET['delete'])) {        //get/post connection

                  $sl=$_GET['delete'];
                
                  $sql= "DELETE FROM  `addques` WHERE sl ='$sl'";     // deletation
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

                

                  

                <div class="container my-5">

                <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Text Question</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Image Question</button>
                  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Combind Question</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <h2 class="text-dark my-3">Add Question Inside <?php echo"<font color='orange'>".$catagory."</font>"; ?></h2>

                  <form action="" method="post">


                      <div class="mb-3">
                      <label for="title" class="form-label text-dark">Add Question</label>
                      <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="question" name="question"  aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                      <label for="title" class="form-label text-dark">Add Option 1</label>
                      <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op1" name="op1"  aria-describedby="emailHelp">
                      </div>


                      <div class="mb-3">
                      <label for="title" class="form-label text-dark">Add Option 2</label>
                      <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op2" name="op2"  aria-describedby="emailHelp">
                      </div>
                      
                      
                      <div class="mb-3">
                          <label for="title" class="form-label text-dark">Add Option 3</label>
                          <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op3" name="op3"  aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                      <label for="title" class="form-label text-dark">Add Option 4</label>
                      <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op4" name="op4"  aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                      <label for="title" class="form-label text-dark">Add Answer</label>
                      <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="answer" name="answer"  aria-describedby="emailHelp">
                      </div>
                      
                      <button type="submit" name="save" class="btn  bt3">Save</button>
                    
                    </form>

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                <form action="" method="post">


                  <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Add Question</label>
                            <input type="file" class="form-control" id="question" name="question" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                  <label for="title" class="form-label text-dark">Add Option 1</label>
                  <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op1" name="op1"  aria-describedby="emailHelp">
                  </div>


                  <div class="mb-3">
                  <label for="title" class="form-label text-dark">Add Option 2</label>
                  <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op2" name="op2"  aria-describedby="emailHelp">
                  </div>


                  <div class="mb-3">
                      <label for="title" class="form-label text-dark">Add Option 3</label>
                      <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op3" name="op3"  aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                  <label for="title" class="form-label text-dark">Add Option 4</label>
                  <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="op4" name="op4"  aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                  <label for="title" class="form-label text-dark">Add Answer</label>
                  <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="answer" name="answer"  aria-describedby="emailHelp">
                  </div>

                  <button type="submit" name="submit" class="btn  bt3">Save</button>

                  </form>


                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


                <form action="" method="post">


                      <div class="mb-3">
                      <label for="title" class="form-label text-dark">Add Question</label>
                      <input type="text" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="question" name="question"  aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Add Option</label>
                        <textarea class="form-control" id="op1" name="op1" rows="3"></textarea>
                      </div>


                      
                      
                      <button type="submit" name="save2" class="btn  bt3">Save</button>
                    
                    </form>
                </div>
              </div>

                



                </div>
               
                </div>

                <div class="col-lg-6 cl1 px-5">

                

                <img class="img-fluid im1 mt-5" src="picture/Exams.gif" alt="logo">    


                  </div>


                 



              </div>


                <div class="container">

                

               
                <h3 class="text-center"><img class="img-fluid imm" src="picture/coursetrcard.png" alt="">Question List</h3>
                 <hr>
                
                <table class="table table-responsive pt-3   table-hover text-center " id="myTable">
                  
                <thead class="tt1 text-white">
                  
                  <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Question</th>
                    <th scope="col">optopn1</th>
                    <th scope="col">optopn2</th>
                    <th scope="col">optopn3</th>
                    <th scope="col">optopn4</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                
                <?php

                  $sql="SELECT * FROM `addques`"; 
                                                        //selecting operation from db
                  $result=mysqli_query($conn,$sql);
                 

                  $no=1;
                          
                          while($row=mysqli_fetch_assoc($result))://mysqli_fetch_assoc($result)=fetch data from db 
                          
                          
                          ?> 
                            
                            
                            
                               <tr>
                                <th scope='row'><?php echo $no;?></th>
                                <td><?php echo $row ['question'];?></td>                <!--real rules of select/update/delete query-->
                                <td><?php echo $row ['op1'];?></td>
                                <td><?php echo $row ['op2'];?></td>
                                <td><?php echo $row ['op3'];?></td>
                                <td><?php echo $row ['op4'];?></td>
                                <td><?php echo $row ['answer'];?></td>
                              
                                <td>
                              <a href="addques.php?delete=<?php echo $row['sl'];?>"
                                 class="btn bt2">Delete</a> 
                              </td>
                              
                               
                               
                                
                                
                                </tr>
                              
                         
                           
                           
                          
                            <?php 
                            
                            $no=$no+1;

                            endwhile 
                            ?>
                        
                           
                 
                
                 
                </tbody>
              </table>

              <hr>
                           


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