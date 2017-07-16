(function($) {
    var slideReady = true;
    $(function() {
       $('.vslider-nav .vslider-nav-item').click(function(){
           slideReady = false;
           
           var slideItemId = $(this).attr('id');
           console.log(slideItemId);
        //    $('.vslide-item.' + slideItemId).animateCss('slideInUp','active');
           $('.vslider-item.' + slideItemId).addClass('active')
           $('.vslider-item.' + slideItemId).nextAll().removeClass('active');
           $('.vslider-nav .vslider-nav-item').removeClass('vslider-nav-item-active');
           $(this).addClass('vslider-nav-item-active');

           var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
           animationEnd = 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend';
           $('.vslider-item.' + slideItemId).one(animationEnd, function() {
               console.log('animation end');
               slideReady = true;
           });
        
       });

       $('.vslider-wrapper').on('mousewheel', function(e) {
            if(e.deltaY > 0){
                //scroll up
                if(slideReady)
                    $('.vslider-nav-item-active').prev().click();
            }else{
                //scroll down

                if($('.vslider-nav-item-active').next().length)
                    e.preventDefault(); 

                if(slideReady){

                    if($('.vslider-nav-item-active').next().length)
                        $('.vslider-nav-item-active').next().click();

                }else{
                    e.preventDefault(); 
                }
            }
        });
    });
    

   
})(jQuery);

