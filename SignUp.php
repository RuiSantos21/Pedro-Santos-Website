<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/SignUp.css">
    <title>Sign Up</title>
</head>
<body>
    <?php include_once 'commons/nav.php' ?>
    <div class="login_sec">
        <div class="input-container">
            <form action="/script/php/SignUp.inc.php" method="post">
                <input class="styled-input wide" type="text" name="name" id="" placeholder="Nome">
                <input class="styled-input wide" type="email" name="email" id="email" placeholder="Endereço de Email">
                <input class="styled-input wide" type="password" name="pwd" id="pwd" placeholder="Palavra-Passe">
                <input class="styled-input wide" type="password" name="verified_pwd" id="verified_pwd" placeholder="Repita Palavra-Passe">
                <div class="side-by-side">
                <button class="btn-submit" type="submit" name="submit">Sign Up</button>
                <button formaction="/Login.php" class="btn-submit" >Login</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '<p class="warning">Verifique que preencheu todos os campos</p>';
            }
            elseif($_GET["error"] == "InvalidName"){
                echo '<p class="warning">Escreva um Nome valido</p>';
            }
            elseif($_GET["error"] == "InvalidEmail"){
                echo '<p class="warning">Email Invalido</p>';
            }
            elseif($_GET["error"] == "EmailExists"){
                echo '<p class="warning">Email já Registado</p>';
            }
            elseif($_GET["error"] == "pwdnotmatch"){
                echo '<p class="warning">As palavras não correspondem</p>';
            }
            elseif($_GET["error"] == "stmtfailed"){
                echo '<p class="warning">Opss! Aconteceu um erro &#128517 Por favor tente novamente</p>';
            }
            elseif($_GET["error"] == "none"){
                echo '<p class="warning">Registro Completo</p>';
            }
        }
    ?>
</body>
</html>