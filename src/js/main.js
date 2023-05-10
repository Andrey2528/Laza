(function ($) {
    'use strict';

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
                    breakpoint: 601,
                    settings: {
                        aarrows: false,
                        centerMode: true,
                        centerPadding: '5px',
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
                    breakpoint: 601,
                    settings: {
                        aarrows: false,
                        centerMode: true,
                        centerPadding: '5px',
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
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '1px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        aarrows: false,
                        centerMode: true,
                        centerPadding: '1px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        /* Archive Project Functions */
        handleScrollForLessonsUpdate();
        initAnimation();
    });

    function onEntry(entry) {
        entry.forEach(change => {
            if (change.isIntersecting) {
                change.target.classList.add('element-show');
            }
        });
    }

    function initAnimation() {
        let options = { threshold: [0.5] };
        let observer = new IntersectionObserver(onEntry, options);
        let elements = document.querySelectorAll('.element-animation');
        for (let elm of elements) {
            observer.observe(elm);
        }
    }

    // Logic for scroll
    function handleScrollForLessonsUpdate() {
        const lessonList = $('#lesson-list');
        if (!lessonList.length) return;

        $(window).scroll(async function () {
            const ajaxing = lessonList.attr('data-ajaxing');
            const currentPage = parseInt(lessonList.attr('data-page'));
            const maxPage = parseInt(lessonList.attr('data-max-page'));

            if (ajaxing || currentPage >= maxPage)
                return;

            if (($(document).height() - $(window).height()) - $(window).scrollTop() <= 800) {

                
                $('.loading-animation').addClass('active-loading'); //TODO: Enable Loading animation

                lessonList.attr('data-ajaxing', true);
                const data = await getLessons(lessonList.attr('data-cat'), currentPage + 1);

                lessonList.attr('data-page', currentPage + 1);
                lessonList.attr('data-max-page', data['max-page']);
                lessonList.removeAttr('data-ajaxing');

                $('.loading-animation').removeClass('active-loading');//TODO: Disable Loading animation

                $('.archive__list').append(data['html']);
                initAnimation();
            }
        });
    }

    async function getLessons(category, page) {
        const args = new FormData();
        args.append('action', 'get_lessons_ajax');
        args.append('page', page);
        args.append('category', category);

        try {
            const response = await fetch(ajax.url, {
                method: 'post',
                body: args,
                credentials: 'same-origin'
            });

            const result = await response.json();
            return result;
        } catch (e) {
            console.log(e);
            return '';
        }
    }

})(jQuery);