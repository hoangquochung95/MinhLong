$(document).ready(function(){
    $.fn.extend({
        animateCss: function(animationName, callback) {
            var animationEnd = (function(el) {
                var animations = {
                    animation: 'animationend',
                    OAnimation: 'oAnimationEnd',
                    MozAnimation: 'mozAnimationEnd',
                    WebkitAnimation: 'webkitAnimationEnd',
                };

                for (var t in animations) {
                    if (el.style[t] !== undefined) {
                        return animations[t];
                    }
                }
            })(document.createElement('div'));

            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);

                if (typeof callback === 'function') callback();
            });

            return this;
        },
    });
    $('.luxury-item-body').on('mouseenter',function(){
        $(this).addClass('luxury-item-body-active');
    });
    $('.luxury-item-body').on('mouseleave',function(){
        $(this).removeClass('luxury-item-body-active');
    });
    $('.on-top').on('click',function(){
        document.body.scrollTop =0;
        document.documentElement.scrollTop=0;
        // console.log("asdasds");
        // $(document.body).scrollTo({
        //     top: 0,
        //     behavior: 'smooth'
        // })
    });


});



function plusSlides(n) {
    var scrollValue =$('.popular-item')[0].scrollLeft;
    if(n>0){

        $('.popular-item')[0].scrollTo({
            top: 0,
            left: scrollValue+500,
            behavior: 'smooth'
        })
    }
    if(n<0){
        $('.popular-item')[0].scrollTo({
            top: 0,
            left: (scrollValue -500)?scrollValue -500:0,
            behavior: 'smooth'
        })
    }
}


