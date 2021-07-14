<?php
    session_start();
?>

<header class="header">
        <div class="container">
            <a href="Main.php"><img src="/Images/Logo1.png" alt="Logo" width="148" height="58"></a>
            <nav>
                <ul class="menu">
                    <li><a href="Contact.php">Contactos</a></li>
                    <li><a href="Exemplos.php">Exemplos</a></li>
                    <li><a href="Reviews.php">Reviews</a></li>
                    <?php
                        if (isset($_SESSION["userid"])) {
                            echo '<li><a  class="user_login" href="Profile.php"><img src="/Images/user.png" alt="user" width="30px" height="30px"></a></li>';
                            echo '<li><a href="script/php/Logout.inc.php">Log out</a></li>';
                        }
                        else{
                            echo '<li><a  class="user_login" href="Login.php"><img src="/Images/user.png" alt="user" width="30px" height="30px"></a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </header>