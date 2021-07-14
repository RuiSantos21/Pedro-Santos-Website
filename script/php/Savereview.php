<?php


if(isset($_POST["submit"])){
    
    session_start();    
    if(isset($_SESSION['userid'])){
    $Userid = $_SESSION['userid'];
    $RatedIndex =$_POST['rating'];
    $comt = $_POST["comment"];
    $RatedIndex++;

    require_once __DIR__ .'/db.inc.php';
    require_once __DIR__. '/functions.inc.php';

    $sql = "INSERT INTO ratings(userId,ratingStars,ratingComment) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../../SignUp.php?error=stmtfailed");
        exit(); 
    }
    


    mysqli_stmt_bind_param($stmt, "iis", $Userid, $RatedIndex , $comt);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../Reviews.php?error=none");
    }
    else{
        header('location: ../../Reviews.php?error=loginerror');
    }
    
}