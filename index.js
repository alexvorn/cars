$(document).ready(() => {
    $('.slick-wrap').slick({
        autoplay: true,
        infinity: true,
    });

    $('.comments').slick({
        slidesToShow: 3,
        responsive: [
                {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinity: true,
                },
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinity: true,
                },
            },
            {
                breakpoint: 321,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinity: true,
                },
            },
        ],
    });
});

const listItems = document.querySelectorAll('#advancing-list li');
const selectedBtn = document.getElementById('select-button');
let selectedText = null;

// set click to drop-down elements
listItems.forEach(item => {
    item.addEventListener('click', e => {
        selectedText = e.target.textContent;
        changeSelectedContent(selectedText);
    });
});

document.getElementById('btn-help').addEventListener('click', () => {
    sendToEmail(null, null, null, selectedText);
});

function changeSelectedContent(content) {
    selectedBtn.innerHTML = content;
}

function sendToEmail(name, phoneNumber, autoType, selectedAccessory) {
    console.log('selectedAccessory', selectedAccessory);
    // send(name, phoneNumber, autoType, selectedAccessory); for example
}

jQuery(document).ready(function($) {
    $('#checkbox').change(function() {
        setInterval(function() {
            moveRight();
        }, 3000);
    });

    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    $('#slider').css({ width: slideWidth, height: slideHeight });

    $('#slider ul').css({ width: sliderUlWidth, marginLeft: -slideWidth });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate(
            {
                left: +slideWidth,
            },
            200,
            function() {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            },
        );
    }

    function moveRight() {
        $('#slider ul').animate(
            {
                left: -slideWidth,
            },
            200,
            function() {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            },
        );
    }

    $('a.control_prev').click(function() {
        moveLeft();
    });

    $('a.control_next').click(function() {
        moveRight();
    });
});

// TABS

$('.catalogtexttop div').click(e => {
    const index = $(e.target).index();
    $('.tab-item').removeClass('active');
    $('.tab-item')
        .eq(index)
        .addClass('active');
});

// TABS

$('.showmodal').click(e => {
    console.log(0);
    $('.modal').addClass('active');
});

$('.close').click(e => {
    $('.modal').removeClass('active');
});

$('.show-more').click(function() {
    console.log(1);
    $(this)
        .closest('.cataloginteriorblock')
        .find('.slider-wrap')
        .addClass('active');
    $(this)
        .closest('.cataloginteriorblock')
        .find('.slick-wrap')
        .slick('refresh');
});

$('.layer').click(function() {
    $(this)
        .parent()
        .removeClass('active');
});

// ({
//     user: 'andrejstarusev@gmail.com', // Your GMail account used to send emails
//     pass: 123, // Application-specific password
//     to: 'a.starusiev@zajno.com', // Send to yourself
//     subject: 'ping',
//     text: 'gmail-send example 3', // Plain text
// }({}));

// $('.catalogtexttop div').click(e => {
//     const index = $(e.target).index();
//     $('.tab-item').removeimg('active');
//     $('.tab-item')
//         .eq(index)
//         .addimg('active');
// });
