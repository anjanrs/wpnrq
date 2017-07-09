$(document).ready(function(){
    $('.mobile-menu-icon').click(function(event){
        event.stopPropagation();
        $('.mobile-menu').toggle();

    })
    $(document).click(function(){
        $('.mobile-menu').hide();
    })
});