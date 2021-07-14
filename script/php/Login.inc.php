<?php

if(isset($_POST["submit"])){
    

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];


    require_once __DIR__ .'/db.inc.php';
    require_once __DIR__. '/functions.inc.php';

    if(emptyInputLogin($email,$pwd) !== false){
        header("location: ../../Login.php?error=emptyinput");
        exit();
    }
    

   
    loginUser($conn,$email,$pwd);


}
else{
    header("location: ../../Login.php");
    exit();
}