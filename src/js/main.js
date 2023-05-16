(function ($) {
    'use strict';

    $(document).ready(function(){
        sliderMultipleItem();
        sliderSlider2();
        sliderMainSlider();

        checkInputFile();
        handleScrollForLessonsUpdate();
        accordionLessonPage();
    });

    function sliderMultipleItem(){
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
        })
    }

    function sliderSlider2(){
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
                        arrows: false,
                        centerMode: true,
                        centerPadding: '5px',
                        slidesToShow: 1
                    }
                }
            ]
        })
    }

    function sliderMainSlider(){
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
        })
    }

    function checkInputFile(){
        const fileInput = document.getElementById("file-input");
        const fileLabel = document.getElementById("file-label");
        const buttonText = fileLabel.querySelector(".input__file-button-text");

        fileInput.addEventListener("change", function() {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const fileType = file.type;
                
                if (fileType === "application/pdf" || fileType === "image/jpeg" || fileType ===  "image/jpg" 
                    || fileType ===  "image/png" || fileType ===  "application/vnd.ms-excel" 
                    || fileType ===  "application//vnd.ms-word" || fileType ===  "" || fileType ===  "text/plain" 
                    || fileType ===  "xlsx") {

                    buttonText.textContent = "Выбрано";
                } else {
                    buttonText.textContent = "Неправильный тип файла";
                }
            } else {
                buttonText.textContent = "Выберите файл";
            }
        });
    }

    function accordionLessonPage(){
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);// Проверяем, является ли устройство мобильным
        var acc = document.getElementsByClassName("accordion");
        var i;

        if (isMobile) {// Если устройство мобильное, применяем обработчик события при нажатии
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                    } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        } else {
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("mouseenter", function() {
                    this.classList.add("active");
                    var panel = this.nextElementSibling;
                    panel.style.maxHeight = panel.scrollHeight + "px"; // Устанавливаем максимальную высоту для раскрытия
                });
                acc[i].addEventListener("mouseleave", function() { // Добавляем событие mouseleave
                    this.classList.remove("active");
                    var panel = this.nextElementSibling;
                    panel.style.maxHeight = null; // Сбрасываем максимальную высоту
                });
            }
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

                $('.loading-animation').addClass('active-loading'); //Enable Loading animation

                lessonList.attr('data-ajaxing', true);
                const data = await getLessons(lessonList.attr('data-cat'), currentPage + 1);

                lessonList.attr('data-page', currentPage + 1);
                lessonList.attr('data-max-page', data['max-page']);
                lessonList.removeAttr('data-ajaxing');

                $('.loading-animation').removeClass('active-loading');//Disable Loading animation

                $('.archive__list').append(data['html']);
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