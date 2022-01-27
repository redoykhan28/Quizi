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
    <link rel="stylesheet" href="main1.css" class="css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kirang+Haerang&display=swap" rel="stylesheet">           
    <title>Welcome to Quizi-Master in any subject</title>
  </head>
 
  <body>
      
        
  
  <nav class="navbar navbar-expand-lg navbar-dark  p-1 nv1">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 hed" href="#"><img class="im" src="picture/logo2.png" alt="logo">Quizi</a>
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
              
                <form class="d-flex mx-3">
                    <input class="form-control me-2 sr1 " type="search" placeholder="🔍 Search" aria-label="Search">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>

                <div class="ls px-2 my-2">
                <a href="student_login.php" class="btn btn-outline-light text-decoration none">Student</a>
                <a href="teacher_login.php" class="btn btn-secondary text-decoration none">Teacher</a>
               
                 </div >
                </div>
            </div>
            </nav>
    
        <div class="container-fluid">

            <div class="row mx-1">

            <div class="col-lg-6 co1 ">

            <h2 class="ht1">Practice More And</h2>
            <h2 class="ht2">Become Success Day by Day!</h2>

            <h5 class="ht5 ani text-secondary">Master any subject, one success at a time.</h5>

            <p class="my-4 ani text-secondary p1">Let's Start a Random Quiz...</p>

            <div class="bt text-start px-4">

            
           

            <a class="text-decoration-none text-white btn text-center bt1 ani" href="sample_quiz.php">Get Started</a>

            </div>


            <div class="row  my-5 lkm">

                <div class="col-lg-3 ">

                <a href="student_login.php"  class="fs-5 lk1">I'm a Student</a>

                </div>

                <div class="col-lg-3">

                <a href="teacher_login.php"  class="fs-5 lk2" >I'm a Teacher</a>

                </div>

         </div>

            
    </div>

            <div class="col-lg-6 co2">

            <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/ll1.jpg" class="d-block w-100" alt="...">
                        </div>
                        

                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/ll2.jpg" class="d-block w-100" alt="...">
                        </div>
                        

                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/ll5.jpg" class="d-block w-100" alt="...">
                        </div>

                   

                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/l7.jpg" class="d-block w-100" alt="...">
                      
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                        <img class="img-fluid mimg" src="picture/l8.jpg" class="d-block w-100" alt="...">
                        
                        </div>

                        
                    </div>
                    
                    </div>


                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="5000">
                                <h2 class="tl1">QUIZI IS  FOR</h2>
                                <p class="slide-in fw-bold">“Get through exams to get to vacation” students
                                </p>
                                <div class="ctt d-flex justify-content-center" >

                                    <div class="progress"  style="width: 700px; height:4px;">
                                        <div class="progress-bar pr1  progress-bar-striped progress-bar-animated"   role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                    </div>
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="5000">
                            <h2 class="tl2">QUIZI IS  FOR</h2>
                            <p class="slide-in fw-bold"> “Tonight I work, so tomorrow I can go places” students
                                </p>
                                <div class="ctt d-flex justify-content-center" >

                                <div class="progress"  style="width: 700px; height:4px;">
                                    <div class="progress-bar pr2   progress-bar-striped progress-bar-animated"   role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div>
                                </div>
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="5000">
                            <h2 class="tl3">QUIZI IS  FOR</h2>
                           <p class="slide-in fw-bold"> “I’ll top when result will arrived students
                                </p>

                                <div class="ctt d-flex justify-content-center" >

                                <div class="progress"  style="width: 700px; height:4px;">
                                    <div class="progress-bar pr3 progress-bar-striped progress-bar-animated"   role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div>
                             </div>
                            </div>

                            <div class="carousel-item text-center" data-bs-interval="5000">
                            <h2 class="tl4">QUIZI IS  FOR</h2>
                           <p class="slide-in fw-bold"> "Stress moved in and I checked out" students
                                </p>
                                <div class="ctt d-flex justify-content-center" >

                                <div class="progress"  style="width: 700px; height:4px;">
                                <div class="progress-bar pr4  progress-bar-striped progress-bar-animated"   role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div>
                                </div>
                            </div>

                            <div class="carousel-item text-center" data-bs-interval="5000">
                            <h2 class="tl5">QUIZI IS  FOR</h2>
                           <p class="slide-in fw-bold"> "Back off, I'm easily triggered!" students
                                </p>

                        <div class="ctt d-flex justify-content-center" >

                            <div class="progress"  style="width: 700px; height:4px;">
                                <div class="progress-bar pr5   progress-bar-striped progress-bar-animated"   role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                            </div>
                        </div>
            
                    </div>
                            
                        </div>
                        </div>
                    
    
        

            </div>
            
            </div>

                    <div class="text">

                    <h1 class="text-center ht3"><img class="im" src="picture/logo.png" alt="Logo">90% Of students who use Quizi reports higher grade!!! </h1>

                    </div>


                    <div class="row " >

                        <div class="col-lg-6">

                            <img class="imf-fluid im2 float-end" src="picture/edu1.jpg" alt="Logo">

                        </div>

                        <div class="col-lg-4 text-start py-3" data-aos="fade-right">

                        <h3 class="fw-bold">You bring the brains, we’ll bring </h3>
                        <h3 class="fw-bold ">everything else....</h3>

                        <p>From flashcards to help you learn francais, to games that make it easy to get a handle on history, use a variety of tools to conquer any challenge.</p>

                        
                        </div>



                    </div>

                    
                    <div class="row mt-5" >

                        <div class="col-lg-4 t2 py-3 text-justify" data-aos="fade-left">

                        <h3 class="fw-bold">Your next win is just</h3>
                        <h3 class="fw-bold">a fact away!</h3>

                        <p>Each new thing you learn is an achievement. Quizlet breaks down topics and subjects, so you accomplish something new every step of the way.</p>

                        </div>

                        <div class="col-lg-4 ">

                        <img class="img-fluid im2 float-start" src="picture/kd.jpg" alt="Logo">

                        
                        </div>


                        <div class="row mt-5" >

                        <div class="col-lg-6">

                            <img class="img-fluid im2 float-end" src="picture/kd2.jpg" alt="Logo">

                        </div>

                        <div class="col-lg-4 text-start py-3"data-aos="fade-right" >

                        <h3 class="fw-bold">Don’t get frustrated. </h3>
                        <h3 class="fw-bold">Get it done.</h3>

                        <p>When even the smallest lessons feel like a victory, it’s easy to keep going.</p>

                        
                        </div>



                    </div>


                    <div class="row my-5" data-aos="zoom-in">

                      

                        <div class="col-lg-6 text-center mt-5 py-5">

                        <h5 >TEACHERS</h5>
                        <h3 class="fw-bold">Empower your students</h3>

                        <p>Help every student confidently learn anything, no matter what they’re striving to achieve. Using Quizlet’s free study sets, study modes and in-class game, you can instantly create a more engaged classroom.</p>

                        
                        </div>

                        <div class="col-lg-6">

                            <img class="img-fluid im3  float-end" src="picture/it.jpg" alt="Logo">

                        </div>



                    </div>




                    </div>


                


                 </div>

               
                 
    </div>

    <footer class=" my-0">

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