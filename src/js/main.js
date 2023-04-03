(function ($) {
    $(document).ready(function(){
        $('.multiple-items').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 1500,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '450px',
                        slidesToShow: 1
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
    });
 
})(jQuery);