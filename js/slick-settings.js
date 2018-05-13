jQuery(document).ready(function($){
            $('.slider').slick({
                dots: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000, // speed is in milliseconds
                speed: 300,
                responsive: [{
                   breakpoint: 768,
                   settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   }
                 },{
                   breakpoint: 100,
                   settings: "unslick"
                 }]
            });
         });
