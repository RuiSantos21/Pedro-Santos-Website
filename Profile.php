<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Profile.css">
    <title>Profile</title>
</head>
<body>
    <?php  include_once 'commons/nav.php'  ?>

    <?php
        

        $uid = $_SESSION['userid']; 
        $email = $_SESSION['useremail']; 
        $name = $_SESSION['username'];

    ?>

    <div class="holder">
    <div class="name"><h1>Ola: <?php echo $name?></h1></div>  
        <div class="Id"><p>O seu id: <?php echo $uid?></p> </div>
        <div class="email"><p>O seu email: <?php echo $email?></p></div>

        
        
    </div>

    <?php
            require_once __DIR__ .'/script/php/db.inc.php';

            $sql = "SELECT * FROM ratings WHERE userId = ?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("location: ../../SignUp.php?error=stmtfailed");
                exit();
            }

            mysqli_stmt_bind_param($stmt, "i", $uid);
            mysqli_stmt_execute($stmt);


                $result = mysqli_stmt_get_result($stmt);

                $resultCheck = mysqli_num_rows($result);
            
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo'  <div class="review" id="'.$row["ratingId"].'" data-index="'.$row["ratingId"].'">
                    <div class="name">
                        <p>'.$name.'</p>
                    </div>
                    <div class="stars" data-rating="'.$row["ratingStars"].'">
                            <img class="star-fixed" data-number="0" src="Images/star-regular.svg" >
                            <img class="star-fixed" data-number="1" src="Images/star-regular.svg" >
                            <img class="star-fixed" data-number="2" src="Images/star-regular.svg" >
                            <img class="star-fixed" data-number="3" src="Images/star-regular.svg" >
                            <img class="star-fixed" data-number="4" src="Images/star-regular.svg" >
                        
                    </div>
                    <div class="comment">
                            <p>
                            '.nl2br($row["ratingComment"]).'
                            </p>
                            
                        </div>
                </div>';
            
                }
            }
        ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="/script/js/fillreviewstars.js"></script>
</body>
</html>