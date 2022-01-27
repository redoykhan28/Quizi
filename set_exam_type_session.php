<?php


include "conn.php";

    session_start();
    if(!isset($_SESSION['loggedin']  )){

    header("location:student_login.php");
    exit;
}

if (isset($catagory) || isset($_SESSION["exam_time"])) {
    $catagory=$_GET["catagory"];
    $_SESSION["catagory"]=$catagory;
    
    $res=mysqli_query($conn,"select * from catagory where name='$catagory'");
    while($row=mysqli_fetch_array($res))
    {
        $_SESSION["exam_time"]=$row["time"];
    }
    date_default_timezone_set('Asia/Dhaka');
    $date = date("Y-m-d H:i:s");
    $_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date . "+$_SESSION[exam_time] minutes"));
    $_SESSION["exam_start"]="yes";
}


?>


