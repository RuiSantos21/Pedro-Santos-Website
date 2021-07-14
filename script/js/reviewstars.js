

$(document).ready(function(){
    var uID = '<%= Session["userid"] %>' 
    var ratedIndex = -1;
    $('.star').click(function(){
        ratedIndex = parseInt($(this).data('index'));
        var rating = document.getElementById("rating");
        rating.value = ratedIndex;
        
    });

    resetStar();
    $('.star').mouseover(function(){
        resetStar();

        var current_index = parseInt($(this).data('index'));

        for(var i = 0;i<=current_index; i++){
            $('.star:eq('+i+')').css('content', 'url("/Images/star-solid.svg")');
        }
    });

    $('.star').mouseleave(function(){
        resetStar();

        if(ratedIndex !=-1){
        for(var i = 0;i<=ratedIndex; i++){
            $('.star:eq('+i+')').css('content', 'url("/Images/star-solid.svg")');
        }
    }
    });

    function resetStar(){
        $('.star').css('content', 'url("/Images/star-regular.svg")');
    }
});