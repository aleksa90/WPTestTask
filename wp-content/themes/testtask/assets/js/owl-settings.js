$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        // зацикливаем
        loop: true,
        dots:false,
        nav: true,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            }}
    });
});