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
    $('.luxury-item-icons').on('mouseenter',function(){

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
            left: (scrollValue -500)?scrollValue -500:00,
            behavior: 'smooth'
        })
    }
}

window.onscroll = function() {
    scrollEvent();
};

function scrollEvent() {
    var indexLinkTop =$('.index-link ')[0].offsetTop;
    if (document.body.scrollTop > indexLinkTop|| document.documentElement.scrollTop > indexLinkTop) {


    } else if (document.body.scrollTop > indexLinkTop|| document.documentElement.scrollTop > indexLinkTop){
        console.log('0');
    }

}
