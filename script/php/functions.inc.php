<?php

function emptyInputSignup($name,$email,$pwd,$pwdRepeat){
    $result = null;
    if(empty($name) || empty($email) || empty($pwd)|| empty($pwdRepeat)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function InvalidUid($name){
    $result = null;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function InvalidEmail($email){
    $result = null;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdRepeat){
    $result = null;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function EmailExists($email, $conn){
    $sql = "SELECT * FROM users WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../../SignUp.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);


    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function create_user($conn,$name,$email,$pwd){
    $sql = "INSERT INTO users(userName,userEmail,userPwd) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../../SignUp.php?error=stmtfailed");
        exit();
    }
    $HashPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sss", $name, $email , $HashPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../SignUp.php?error=none");
}

function emptyInputLogin($email,$pwd){
    $result = null;
    if(empty($email) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd){
    $uidExists = EmailExists($email,$conn);

    if($uidExists == false){
        header("location: ../../Login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if ($checkPwd == false){
        header("location: ../../Login.php?error=wrongpwd");
        exit();
    }
    else if ($checkPwd == true){
        session_start();
        $_SESSION['userid'] = $uidExists["userId"]; 
        $_SESSION['useremail'] = $uidExists["userEmail"]; 
        $_SESSION['username'] = $uidExists["userName"];
        header("location: ../../Main.php");
        exit();
    }
    
}