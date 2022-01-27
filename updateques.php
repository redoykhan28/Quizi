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
   
    <link rel="stylesheet" type="text/css" href="catagory.css"> 
    
  <title>update  Question</title>
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





      <?php


if (isset($_GET['edit']) ) {        //get/post connection

  
    $sl=$_GET['edit'];


  $sql= "SELECT * FROM `addques` WHERE sl='$sl'";  //select query
  $result=mysqli_query($conn,$sql);

 
  
 
    while($row=mysqli_fetch_assoc($result)) //mysqli_fetch_assoc($result)=fetch data from db
    {

        $sl= $row['sl'];
        $question= $row['question'];
        $op1=$row['op1'];
        $op2=$row['op2'];
        $op3=$row['op3'];
        $op4=$row['op4'];
        $answer=$row['answer'];
        $catagory=$row['catagory'];


    }
  
}

?>


<?php

if(isset($_POST['update'])){

  extract($_GET);   //get er value nie asa
  $question= $_POST['question'];
  $op1= $_POST['op1'];
  $op2= $_POST['op2'];
  $op3= $_POST['op3'];
  $op4= $_POST['op4'];
  $answer= $_POST['answer'];
 

  $sql="UPDATE `addques` SET question = '$question', op1 = '$op1',op2 = '$op2',op3 = '$op3',op4 = '$op4',answer = '$answer' WHERE `addques`.sl = '$sl'"; //Update query
  $result=mysqli_query($conn,$sql);

 
if($result){

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
Your Note is successfully updated to the list!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

  else{

    echo "Failed";
  }


}


?>



<div class="container p-4">

<h2 class="text-white">Edit Question...</h2>

<form method="post">
    
    <div class="mb-3">
      <label for="title" class="form-label text-dark">Add Question</label>
      <input type="text" value="<?php echo $question;?>" class="form-control bg-transparent border border-dark border-3 tx1  text-dark" id="question" name="question" aria-describedby="emailHelp">
     </div>
     
    
     <div class="mb-3">
         <label for="desc" class="form-label text-dark">Add Option 1</label>
        <textarea class="form-control bg-transparent border border-dark border-4  text-dark tx2"  id="op1" name="op1" rows="3"><?php echo $op1;?></textarea>
    </div>

    <div class="mb-3">
         <label for="desc" class="form-label text-dark">Add Option 2</label>
        <textarea class="form-control bg-transparent border border-dark border-4  text-dark tx2"  id="op2" name="op2" rows="3"><?php echo $op2;?></textarea>
    </div>

    <div class="mb-3">
         <label for="desc" class="form-label text-dark">Add Option 3</label>
        <textarea class="form-control bg-transparent border border-dark border-4  text-dark tx2"  id="op3" name="op3" rows="3"><?php echo $op3;?></textarea>
    </div>

    <div class="mb-3">
         <label for="desc" class="form-label text-dark">Add Option 4</label>
        <textarea class="form-control bg-transparent border border-dark border-4  text-dark tx2"  id="op4" name="op4" rows="3"><?php echo $op4;?></textarea>
    </div>

    <div class="mb-3">
         <label for="desc" class="form-label text-dark">Add Answer</label>
        <textarea class="form-control bg-transparent border border-dark border-4  text-dark tx2"  id="answer" name="answer" rows="3"><?php echo $answer;?></textarea>
    </div>
    
    <button type="submit" name="update" class="btn btn-success">Update</button>
    <a href="addques.php"class="btn btn btn-primary">View Question</a> 
  </form>
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