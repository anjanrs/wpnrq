$(document).ready(function(){
    $('.mobile-menu-icon').click(function(event){
        event.stopPropagation();
        $('.mobile-menu').toggle();

    })
    $(document).click(function(){
        $('.mobile-menu').hide();
    })
    
    $('.main-menu ul li a').mouseover(function(){
        console.log($(this).find('span'));
        $(this).find('span').addClass('menu-hover');
    });
    $('.main-menu ul li a').mouseout(function(){
        $(this).find('span').removeClass('menu-hover');
    });


     $('.link').mouseover(function(){
        $(this).addClass('link-hover');
    });
    $('.link').mouseout(function(){
        $(this).removeClass('link-hover');
    })


});