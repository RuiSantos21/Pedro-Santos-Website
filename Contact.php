<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Contact.css">
    <title>Contactos</title>
</head>
<body>
    <?php include_once 'commons/nav.php' ?>
        <div class="Intro">
            <h1>Get in Touch</h1>
            <h3>Contact us for a quote, help or to join the team</h3>
        </div>
        
        
       <div class="tabs">
            <!-- Start of links -->
        <div id="links" class="options">
            
            <button class="btn" data-for-tab="1" >
                <a href="#addr" id="l_addr"></a>
                <div class="box" name="addr">
                    <img class="icon" src="Images/Icons/location.png" alt="">
                    <p class="text">Morada</p>
                </div>
            </button>
            <button class="btn" data-for-tab="2" >
                <div class="box" name="cell">
                    <img class="icon" src="Images/Icons/phone.png" alt="">
                    <p class="text">Telemovel</p>
                </div>
            </button>
            <button class="btn" data-for-tab="3">
                <div class="box" name="email">
                    <img class="icon" src="Images/Icons/email.png" alt="">
                    <p class="text">Email</p>
                </div>
            </button> 
        </div>
        <!-- End of links -->
        
        <div id="addr" class="tabs_content" data-tab="1">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.5389500019005!2d-8.346684292366323!3d37.128128452944274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ad1ac65426e87%3A0x226141ec21c40982!2sPedro%20Santos!5e0!3m2!1spt-PT!2spt!4v1624221243163!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div id="cell" class="tabs_content" data-tab="2">
            <div class="cell-holder">
            <h2>N. Telemovel:</h2>
            <h1>924658716</h1>
            <h3 class="warning">Numero Falso</h3>
            </div>
        </div>

        <div id="email" class="tabs_content" data-tab="3">
            <div class=" input-container">
                <form action="script/php/send_mail.php" method="POST">
                    <input  class="styled-input wide" type="text" name="Nome" autocomplete="name" placeholder="Nome Completo">
                    <div class="side-by-side">
                        <input class="styled-input" type="email" name="email" autocomplete="email" placeholder="Endereço de Email">
                        <input class="styled-input" type="tel" name="tel" autocomplete="tel" placeholder="Numero de Telemovel">
                    </div>
                    <input class="styled-input wide" type="text" name="subject" autocomplete="none" placeholder="Assunto">
                    <textarea  class="styled-input wide" name="Mens" placeholder="Mensagem"></textarea>
                    <button class="btn-submit" name="submit"type="submit">Submit</button>
                </form>
                <h3 class="warning">O email não será enviado para o oficial</h3>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/script/js/contact.js"></script>
</body>
</html>