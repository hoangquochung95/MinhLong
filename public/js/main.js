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
        var element=this;
        $(element).find('img').css({'margin-left':'0%','transition':'margin-left 1s'});
        setTimeout(function(){ $(element).find('p').css({'visibility':'visible','opacity':'1','transition':'opacity .6s ease-in-out','font-size':'23px'}); }, 400);
    });
    $('.luxury-item-body').on('mouseleave',function(){
        var element=this;
        $(element).find('img').css({'margin-left':'39%','transition':'margin-left 1s'});
        $(element).find('p').css({'visibility':'hidden','opacity':'0','transition':'opacity 1s ease-in-out','font-size':'10px'});
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
