var multipliedItemCarousel = document.querySelector('#Example')


if(window.matchMedia("(min-width:576px)").matches){
    var carousel = new bootstrap.Carousel(multipliedItemCarousel, {
        interval: false,
    
      })

var carouseWidth = $('.inner-carousel')[0].scrollWidth;
var cardWidth = $('.item-carousel').width();

var scrollPosition = 0;

$('.control-next').on('click',function(){
    if(scrollPosition < (carouselWidth - (cardWidth * 6))){
        console.log('next')
        scrollPosition = scrollPosition + cardWidth;
        $('.inner-carousel').animate({scrollLeft: scrollPosition},
            600);
    }
})

$('.control-prev').on('click',function(){
    if(scrollPosition > 0){
        console.log('prev')
        scrollPosition = scrollPosition - cardWidth;
        $('.inner-carousel').animate({scrollLeft: scrollPosition},
            600);
    }
})
}else{
    $(multipliedItemCarousel).addClass('slide')

}