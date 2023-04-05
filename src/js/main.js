(function ($) {
    $(document).ready(function(){
        $('.multiple-items').slick({
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1441,
                    settings: {
                        dots: true,
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1045,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '-60px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        autoplay: true,
                        autoplaySpeed: 3000,
                    }
                },
                    {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
            
        });
        $('.slider2').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1441,
                    settings: {
                        dots: true,
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1045,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '-60px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                    {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
            
        });
        $('.main__slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1441,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '5px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                    {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
            
        });
    });
 
})(jQuery);