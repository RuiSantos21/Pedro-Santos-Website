<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/SignUp.css">
    <title>Login</title>
</head>
<body>
    <?php include_once 'commons/nav.php' ?>
    <div class="login_sec">
    <div class="input-container">
            <form action="/script/php/Login.inc.php" method="post">
                <input class="styled-input wide" type="email" name="email" id="email" placeholder="Endereço de Email">
                <input class="styled-input wide" type="password" name="pwd" id="pwd" placeholder="Palavra-Passe">
                <div class="side-by-side">
                <button class="btn-submit" type="submit" name="submit">Login</button>
                <button formaction="/SignUp.php" class="btn-submit" >Sign Up</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '<p class="warning">Verifique que preencheu todos os campos</p>';
            }
            elseif($_GET["error"] == "wronglogin"){
                echo '<p class="warning">Email não registado</p>';
            }
            elseif($_GET["error"] == "wrongpwd"){
                echo '<p class="warning">PalavraPasse Incorreta</p>';
            } 
        }
    ?>
</body>
</html>