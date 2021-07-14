<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["verified_pwd"];

    require_once __DIR__ .'/db.inc.php';
    require_once __DIR__. '/functions.inc.php';

    if(emptyInputSignup($name,$email,$pwd,$pwdRepeat) !== false){
        header("location: ../../SignUp.php?error=emptyinput");
        exit();
    }

    if(InvalidUid($name) !== false){
        header("location: ../../SignUp.php?error=InvalidName");
        exit();
    }
    if(InvalidEmail($email) !== false){
        header("location: ../../SignUp.php?error=InvalidEmail");
        exit();
    }

    if(EmailExists($email,$conn) !== false){
        header("location: ../../SignUp.php?error=EmailExists");
        exit();
    }

    if(pwdMatch($pwd,$pwdRepeat) !== false){
        header("location: ../../SignUp.php?error=pwdnotmatch");
        exit();
    }

    create_user($conn,$name,$email,$pwd);


}
else{
    header("location: ../../SignUp.php");
    exit();
}