$(document).ready(function(){
    $("#menu").hover(function(){
        
        $(this).animate({
            left:"-22px"
        }, 500, "easeInSine");
    }, function(){
        $(this).stop().animate({
            left:"-150px"
        },1500,"easeOutBounce")
    });

});