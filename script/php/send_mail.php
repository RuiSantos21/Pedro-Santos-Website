<?php
    if(isset($_POST["submit"])){
        $Nome = $_POST["Nome"];
    $mail =$_POST["email"];
    $telemovel = $_POST["tel"];
    $subject = $_POST["subject"];
    $msg = $_POST["Mens"];

    $text = "Mensagem de ".$Nome."\nEmail:".$mail."\nTelemovel: ".$telemovel."\n\n".$msg;

    $headers = "From: $mail\r\n";
    $headers .= "Reply-To $mail";

    mail("testpedro506@gmail.com", $subject,$text,$headers);

    header("Location: ../../Main.php");
    }
    else header("Location: ../../Contact.php")
?>

