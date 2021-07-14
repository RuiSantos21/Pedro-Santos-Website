<?php
require_once __DIR__ .'/db.inc.php'; //acesso a base de dados

$sql = 'SELECT users.userName, ratings.ratingId, ratings.ratingStars, ratings.ratingComment FROM ratings INNER JOIN users ON ratings.userId =users.userId;';
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo'  <div class="review" id="'.$row["ratingId"].'" data-index="'.$row["ratingId"].'">
        <div class="name">
            <p>'.$row["userName"].'</p>
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

