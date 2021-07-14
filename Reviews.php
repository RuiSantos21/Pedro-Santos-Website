<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Reviews.css">
    <title>Reviews</title>
</head>
<body>
    <!-- Navegação -->
    <?php include_once 'commons/nav.php' ?>
    <!-- Mostra as reviews  -->
    <h2 class="title">Veja o que os nossos clientes tem a dizer:</h2>
    <div class="all-reviews">
        
    <?php include_once 'script/php/ShowReviews.php' ?>
    </div>
    <!-- form para uma nova review -->
    <div class="newreview">
        <h3>Diga-nos a sua opnião</h3>

        <form action="/script/php/Savereview.php" method="post" class="reviewform">
            <div class="select-stars">
                <img class="star" data-index="0" src="Images/star-regular.svg" alt="">
                <img class="star" data-index="1" src="Images/star-regular.svg" alt="">
                <img class="star" data-index="2" src="Images/star-regular.svg" alt="">
                <img class="star" data-index="3" src="Images/star-regular.svg" alt="">
                <img class="star" data-index="4" src="Images/star-regular.svg" alt="">
            </div>
            <input type="hidden" name="rating" id="rating" value="0">
            <textarea  class="new-comment" type="text" name="comment" placeholder="Escreva um Comentario"></textarea>
            <?php 
                if(isset($_SESSION["userid"])){
                    echo '<button class="submit-btn" type="submit" name="submit">Enviar</button>';
                }else{
                   echo' <button type="button" disabled>Enviar!</button>';
                }

            ?>
            

            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "loginerror"){
                        echo '<p style="color :red;">Tem de estar logado para fazer uma review</p>';
                    }
                    elseif($_GET["error"] == "none"){
                        echo '<p>Reviews enviada com sucesso/p>';
                    }
                    
                }    
            ?>
        </form>
    </div>

       

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Selecionar o numero de estrelas com o rato  -->
    <script src="script/js/reviewstars.js"></script>
    <!-- prencher as estrelas pelo o numero rating  -->
    <script src="/script/js/fillreviewstars.js"></script>

    <script>
        $('textarea').on('input', function() {
        $(this)
            
            .height(76)
            .height(this.scrollHeight);
        });
    </script>
</html>