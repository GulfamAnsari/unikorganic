// JS for carousel //
//collecting data about the height and width, and counting all the slides (images) 
jQuery(document).ready(function ($) {
    var slideCount = $('#carousel ul li').length;
    var slideWidth = $('#carousel ul li').width();
    var slideHeight = $('#carousel ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    //collecting the styles of the slides
    $('#carousel').css({
        width: slideWidth,
        height: slideHeight
    });
    $('#carousel ul').css({
        width: '100%',
        marginLeft: 0
    });

    //this keeps all the images in order, essentially hiding the ones that arent showing until its their turn to show up and it makes sure no images are skipped.the number controls how fast the images slide to the left. this code also affects the left arrow because the prepend function allows the carousel to go backwards to the image before the image shown. (it like tries to go back but just ends up going back to the same image you were on)
    function moveLeft() {
        $('#carousel ul').animate({
            left: +slideWidth
        }, 900, function () {
            $('#carousel ul li:last-child').prependTo('#carousel ul');
            $('#carousel ul').css('left', '');
        });
    };

    //this keeps all the images in order, essentially hiding the ones that arent showing until its their turn to show up and it makes sure no images are skipped. The number controls how fast or slow the images slide to the right. this code also affects the right arrow because the append function allows the carousel to move forward to the image after the image shown.(once again, it like tries to go forward but just ends up going back to the same image you were on)
    function moveRight() {
        $('#carousel ul').animate({
            left: -slideWidth
        }, 900, function () {
            $('#carousel ul li:first-child').appendTo('#carousel ul');
            $('#carousel ul').css('left', '');
        });
    };

    // this controls the left (prevarrow) and right (nextarrow) arrows so that when you click on them, they either go to the next photo or the previous photo
    $('#carousel .prevarrow').click(function () {
        moveLeft();
    });
    $('#carousel .nextarrow').click(function () {
        moveRight();
    });

    // this auto function moves the photos to the right every 5 seconds without having to click anything. i was going to just do the auto function but then i got to thinking that there are times im on a food blog and someone has the carousel on auto and i have to wait until it comes around again to click the image (which is annoying) so i added the click function too
    setInterval(function () {
        moveRight();
    }, 5000);
});

//Scroll to top button
$(document).ready(function () {
    $('#fixScroll').css("display", "none");

    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $('#fixScroll:hidden').stop(true, true).fadeIn();
        } else {
            $('#fixScroll').stop(true, true).fadeOut();
        }
    });

    $('document').ready(function () {
        $('#fixScroll').click(
            function () {
                $('html, body').animate({ scrollTop: '0px' }, 500);
            }
        );
    });
});