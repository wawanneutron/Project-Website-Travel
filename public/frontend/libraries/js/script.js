// animasi header ketika web dibuka

$(window).on('load', function () {
    $('.animasi-header').addClass('muncul');

    $('.animasi-succses').addClass('muncul');
    setTimeout(function () {
        $('.animasi-btn')
            .addClass('muncul');
    }, 800);

    // header naimasi mobile

    $('.animasi-header').addClass('muncul');
    setTimeout(function () {
        $('.animasi-p')
            .addClass('muncul');
    }, 800);

    $('.animasi-header').addClass('muncul');
    setTimeout(function () {
        $('.btn-get-started')
            .addClass('muncul');
    }, 1500);


});


// animasi ketika web discroll

$(window).scroll(function () {

    var windowScroll = $(this).scrollTop();

    //  testimonial content
    if (windowScroll > $('.section-testimonial-content').offset().top - 350) {

        $('.section-testimonial-content .card-testimonial').each(function (i) {
            setTimeout(function () {
                $('.section-testimonial-content .card-testimonial').eq(i).addClass('muncul');

            }, 300 * (i + 1));
        });
    }

    // wisata popular 
    if (windowScroll > $('.section-popular-content').offset().top - 350) {

        $('.section-popular-content  .card-travel').each(function (i) {
            setTimeout(function () {
                $('.section-popular-content  .card-travel').eq(i).addClass('muncul');

            }, 100 * (i + 1));
        });
    }



});
