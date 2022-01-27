
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="html_squiz.css" class="css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">


    <title>HTML Quiz Test</title>
  </head>
  <body>
   

  <nav class="navbar navbar-light nv2">
  <div class="container-fluid">
  <a class="navbar-brand fs-2 hed" href="#"><img class="im" src="picture/logo1.png" alt="logo">Quizi</a>
    <ul class="d-flex">
      <a class="text-decoration-none fs-3  text-dark px-3" href="sample_quiz.php">X</a>
    </ul>
  </div>
    </nav>


    <div class="main-div">
      

    <div class="inner-div">

    <h3 class="text-center fw-bold mt-3 ht">Course: HTML</h3>
    <span class="time d-flex justify-content-center"></span>

    

    <hr>

    <h4 class="mt-5 question qs">Question Comes Here..</h4>

    <ul>

    <li>

    <input type="radio" name="answer" id="ans1" class="answer">
    <label for="ans1" id="option1" >Answer Option</label>

    </li>

    <li>

    <input type="radio" name="answer" id="ans2" class="answer">
    <label for="ans2" id="option2" >Answer Option</label>

    </li>

    <li>

    <input type="radio" name="answer" id="ans3" class="answer">
    <label for="ans3" id="option3" >Answer Option</label>

    </li>

    <li>

    <input type="radio" name="answer" id="ans4" class="answer">
    <label for="ans4" id="option4" >Answer Option</label>

    </li>


    </ul>

    <button id="submit" class="btn bt1 mt-4">NEXT</button>
    <div class="total que">
    </div>
   <div id="showScore"class="scoreArea"></div>


    </div>

    </div>

    
    <script src="html_squiz_script.js"></script>
    <script src="timer.js"></script>


    
           



         
    

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