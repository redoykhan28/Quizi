<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="sample_quizi.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kirang+Haerang&display=swap" rel="stylesheet">           
    <title>Give a Test!!</title>
  </head>
  <body>
        
  <nav class="navbar navbar-expand-lg navbar-dark  p-1 nv1">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 hed" href="main.php"><img class="im" src="picture/logo2.png" alt="logo">Quizi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="admin_login.php">Administrator</a>
                    </li>
                   
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
              
            
                <div class="ls px-5 my-2">
                <a href="student_login.php" class="btn btn-outline-light text-decoration none mx-2">Student</a>
                <a href="teacher_login.php" class="btn btn-light text-decoration none mx-2">Teacher</a>
               
                 </div >
                </div>
            </div>
            </nav>
    
        <div class="container-fluid">

            <div class="row ">

            <div class="col-lg-6 co1 ">

            
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                   
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/sld (1).png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/sld (2).png" class="d-block w-100" alt="...">
                        </div>
                        
                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/sld (3).png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/sld (4).png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/sld (5).png" class="d-block w-100" alt="...">
                       
                        

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>

            
    </div>

</div>

                <div class="col-lg-6 co2">

                    <h2 class="text-center  fw-bold  tth mt-5"><img class="img-fluid imm" src="picture/smp.png" alt="">Let's having a test !!!</h2>

                   <div class="row my-3 mx-3">

                        <div class="col-lg-6 my-3">
                            
                             <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <img  src="picture/httl.jpg" class="card-img-top imm2" style="height:200px;"  alt="img">
                            </a>
                            
                            
                            <div class="collapse" id="collapseExample">
                            <div class="card card-body card1">
                            <h5 class="card-title fw-bold">HTML</h5>
                                <p class="card-text">HTML means Hyper Text Markup Language</p>
                                <a href="html_quiz.php" class="btn btt">Give a Test!!</a>                          
                              </div>
                            </div>




                        </div>


                        
                        <div class="col-lg-6 my-3">

                            
                        <a class="" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                            <img  src="picture/css1.jpg" class="card-img-top imm2" style=" height:200px;"  alt="img">
                            </a>
                            
                            
                            <div class="collapse" id="collapseExample1">
                            <div class="card card-body card1">
                            <h5 class="card-title fw-bold">CSS</h5>
                                <p class="card-text">CSS means Cascading style Sheet Which used to customize HTML</p>
                                <a href="css_quiz.php" class="btn btt">Give a Test!!</a>                          
                              </div>
                            </div>



                        </div>

                        <div class="col-lg-6 my-3">

                            
                        <a class="" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                            <img  src="picture/js.png" class="card-img-top imm2" style="height:200px;"  alt="img">
                            </a>
                            
                            
                            <div class="collapse" id="collapseExample2">
                            <div class="card card-body card1">
                            <h5 class="card-title fw-bold">JavaScript</h5>
                                <p class="card-text">JavaScript is a lightweight scripting language</p>
                                <a href="javascript_quiz.php" class="btn btt">Give a Test!!</a>                          
                              </div>
                            </div>




                        </div>


                        <div class="col-lg-6 my-3">

                            
                            
                            <a class="" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                            <img  src="picture/boot.png" class="card-img-top imm2" style="height:200px;"  alt="img">
                            </a>
                            
                            
                            <div class="collapse" id="collapseExample3">
                            <div class="card card-body card1">
                            <h5 class="card-title fw-bold">BootStrap</h5>
                                <p class="card-text">Bootstrap is a free and open-source CSS framework.</p>
                                <a href="bootstrap_quiz.php" class="btn btt">Give a Test!!</a>                          
                              </div>
                            </div>



                        </div>

                     
                   </div>


                    

                 </div>
            


            </div>      
                 
    </div>

    <footer class=" mt-3 my-0">

<div class="row p-5  r1">

    <div class="col-lg-3">
   
    <div class="about_university">

    <h5 class="fw-bold text-light my-3">📚 Subject</h5>
   
    <ul class=" text-white">
        <li class="lst"><a  class="text-decoration-none text-white" href="#">HTML</a></li>
        <li class="lst"><a  class="text-decoration-none text-white" href="#">CSS</a></li>
        <li class="lst"><a  class="text-decoration-none text-white" href="#">Bootstrap</a></li>
        <li class="lst"><a  class="text-decoration-none text-white" href="#">JQuery</a></li>
        <li class="lst"><a  class="text-decoration-none text-white" href="#">Javascript</a></li>
        <li class="lst"><a  class="text-decoration-none text-white" href="#">PHP</a></li>
        <li class="lst"><a  class="text-decoration-none text-white" href="#">Others</a></li>
    </ul>

    </div>
  
    </div>

    <div class="col-lg-3">

    <div class="about_university">

        <h5  class=" text-white fw-bold my-3">  🎁  Features</h5>
 
        <ul class= " text-white">
            <li class="lst"><a  class="text-decoration-none text-white" href="#">Quizi Live</a></li>
            <li class="lst"><a  class="text-decoration-none text-white" href="#">Admin DashBoard</a></li>
            <li class="lst"><a  class="text-decoration-none text-white" href="#">Student Panel</a></li>
            <li class="lst"><a  class="text-decoration-none text-white" href="#">Teacher Panel</a></li>
            <li class="lst"><a  class="text-decoration-none text-white" href="#">Random Quizi</a></li>
            <li class="lst"><a  class="text-decoration-none text-white" href="#">Unlimited Course</a></li>
        </ul>

    </div>

    
    </div>

    <div class="col-lg-3">
    <div class="about_university">

            <h5  class=" text-white my-3 fw-bold"> 🗨️  About Us</h5>
      
            <ul  class=" text-white">
                <li class="lst"><a  class="text-decoration-none text-white" href="#">How Quizi Work</a></li>
                <li class="lst"><a  class="text-decoration-none text-white" href="#">Blog</a></li>
                <li class="lst"><a  class="text-decoration-none text-white" href="#">Privacy</a></li>
                <li class="lst"><a  class="text-decoration-none text-white" href="#">Press</a></li>
                <li class="lst"><a  class="text-decoration-none text-white" href="#">Career</a></li>
            </ul>

            </div>
    
    </div>

    <div class="col-lg-3">
    <div class="contact">

        <h5  class=" text-white my-3 fw-bold">  📱  Contact Us</h5>
      
        <p  class="text-decoration-none text-white">529/1, Kazla, Motihar, Rajshahi</p>
        <p  class="text-decoration-none text-white"> info@Quizi.edu.bd</p>
        <p  class="text-decoration-none text-white"> +880721-751274,+880721-751459</p>
        <p  class="text-decoration-none text-white"> facebook.com/Quizi.edu</p>

    </div>
    
</div>
<hr class="bg-light my-4">
<p class="text-center text-light  mt-5">© Copyright 2020 Quizi-Master in any subject | Developed by IT Office, Quizi.</p>

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
  </body>
</html>