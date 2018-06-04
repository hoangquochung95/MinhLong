
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

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var indexLinkTop =$('.index-link ')[0].offsetTop;
    if (document.body.scrollTop > indexLinkTop|| document.documentElement.scrollTop > indexLinkTop) {
        console.log('1');
    } else {
        console.log('0');
    }
}