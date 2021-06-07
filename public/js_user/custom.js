$(document).ready(function () {

    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.btn-scroll-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

$(document).ready(function () {
    $(".search-button").click(function () {
        $(".search-box").toggle();
        $(".search-box input[type='text']").focus();
    });
});

$(document).ready(function () {
    $(".filter-icon").click(function () {
        $(".filter-block").toggleClass('d-block');
    });
});

function changeImage(imgName, obj)
{
    image = document.getElementById(obj.name);
    image.src = imgName;
}
