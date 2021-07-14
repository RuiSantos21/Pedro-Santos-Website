$(document).ready(function(){
    $(".review").each(function(){
    review = $(this).data('index');
    starRating = $(this).children('.stars').data('rating');

    reviewid = document.getElementById(review);
    starsholder = reviewid.getElementsByClassName('stars');
        stars = starsholder[0].children;

    for(var i = 0 ; i < starRating;i++){
        $(stars[i]).css('content', 'url("/Images/star-solid.svg")');
        
    }
    });    
});
