
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