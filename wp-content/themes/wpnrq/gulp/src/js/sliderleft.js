(function($) {
    // $(function() {
    //     $('.section-slider-left').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
    // });
    

    $.fn.extend({
        animateCss: function (animationName, extraCss) {
            console.log('function called');
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName + ' ' + extraCss).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
            return this;
        }
    });

    // $('#left-slider-1').waypoint(function() {
    //     $('#left-slider-1').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
    //     },{
    //         triggerOnce: true,
    //         offset: '90%'
    // });
    $(document).ready(function(){
         $('#left-slider-1').waypoint(function() {
             if(!$('#left-slider-1').hasClass('section-slider-left-loaded')) {
                 $('#left-slider-1').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
             }
            },{
                triggerOnce: true,
                offset: '95%'
        });
         $('#left-slider-2').waypoint(function() {
             if(!$('#left-slider-2').hasClass('section-slider-left-loaded')) {
                 $('#left-slider-2').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
             }
            },{
                triggerOnce: true,
                offset: '95%'
        });
         $('#left-slider-3').waypoint(function() {
             if(!$('#left-slider-3').hasClass('section-slider-left-loaded')) {
                 $('#left-slider-3').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
             }
            },{
                triggerOnce: true,
                offset: '95%'
        });
        // slidePanes();
        // $(window).scroll(function(){
        // slidePanes();
        // })

        // function slidePanes() {
        

        //     if($('#left-slider-1').isInViewport()) {
        //         console.log('1 in view port');
        //         if(!$('#left-slider-1').hasClass('section-slider-left-loaded')) {
                    
        //             $('#left-slider-1').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
        //         }
        //     }

        //     if($('#left-slider-2').isInViewport()) {
        //         console.log('2 in viewport');
        //         if(!$('#left-slider-2').hasClass('section-slider-left-loaded')) {
        //             $('#left-slider-2').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
        //         }
        //     }

        //     if($('#left-slider-3').isInViewport()) {
        //         console.log('3 in view port');
        //         if(!$('#left-slider-3').hasClass('section-slider-left-loaded')) {
        //             $('#left-slider-3').animateCss('slideInLeft fadeIn','section-slider-left-loaded');
        //         }
        //     }
        // }
    });

})(jQuery);

