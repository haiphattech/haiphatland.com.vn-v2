$('.image-project .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots: false,
    // autoplay: true,
    // autoplayTimeout: 5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:2
        }
    }
})
$('.field .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots: false,
    // autoplay: true,
    // autoplayTimeout: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.list-typical-projects .owl-carousel').owlCarousel({
    loop:true,
    // margin:30,
    nav:true,
    navText:["<div class='nav-btn prev-slide'><span aria-label='Previous'>‹</span></div>","<div class='nav-btn next-slide'><span aria-label='Next'>›</span></div>"],
    dots: false,
    // autoplay: true,
    // autoplayTimeout: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
$('.list-partners .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

var totalItems = $('.list-partners .owl-stage .owl-item').length;
var currentIndex = $('.list-partners .owl-stage .owl-item.active').index();

