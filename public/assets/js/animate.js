
/* RETURN TO TOP AFTER PAGE REFRESHED */

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

/* SCROLL EFFECTS COLORED NAVBAR WHEN PAGE IS SCROLLED */

$(document).scroll(function () {
    if ($(document).scrollTop() > 20) {
        $('.bg-cstm').addClass('scrolled'); // WARNAIN NAVBAR
        $('.logo').addClass('scrolled'); // KECILIN LOGO
        $('.nav-border').addClass('scrolled');  // KASIH BORDER DI NAVBAR
    }
    else {
        $('.bg-cstm').removeClass('scrolled');
        $('.logo').removeClass('scrolled');
        $('.nav-border').removeClass('scrolled');
    }
});

/* MENU BUTTON EFFECTS TURN IT INTO X ICON */

$(".menu-icon").click(function () {
    $(this).toggleClass("clicked");
    $(this).siblings(".menus").toggleClass("clicked");
});

/* CLOSE MENU BAR (MOBIL DEVICE) SAAT USER KLIK DILUAR MENU */


/* MAP DETAIL TOGGLE MENU */

//Accordian Action
var action = 'click';
var speed = "500";

//Document.Ready
$(document).ready(function () {
    //Question handler
    $('.map-button').on(action, function () {
        //gets next element
        //opens .a of selected question
        $(this).toggleClass('button-active').next().slideToggle(speed)
            //selects all other answers and slides up any open answer
            .siblings('.map-detail').slideUp();
        // Kalo salah satu button udah diberikan class active, remove class active 
        // kecuali button yang ditarget
        var remove = $('.map-button').not(this);
        remove.removeClass('button-active');

        //Grab img from clicked question
        var img = $(this).find('span');
        //Remove Rotate class from all images except the active
        $('span').not(img).removeClass('rotate');
        //toggle rotate class
        img.toggleClass('rotate');
    });//End on click
});//End Ready


/* CLIENT AND PARTNER SLIDER */
// CLIENT
$(function () {
    //config
    var width = 100 + '%'; // VALUE YANG AKAN DIGUNAKAN UNTUK MENGGERAKKAN SLIDER (LEFT :-100%;)
    var animationSpeed = 1000; // KECEPATAN ANIMASI
    var pauseClient = 3000; // BERAPA LAMA ANIMASI AKAN BERHENTI SEMENTARA
    var currentSlide = 1; // INDEX (FEEL FREE TO CHANGE THIS ), BISA GANTI BERAPAPUN ASAL
    //DI IF STATEMENT JUGA DIGANTI

    //DOM 
    var $slideClient = $('.slider').find('#slide-client');
    var $slideItemClient = $slideClient.find('.slide-item');
    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideClient.stop(true, true).animate({ 'left': '-=' + width }, animationSpeed, function () {
                currentSlide++;
                if (currentSlide === $slideItemClient.length) {
                    currentSlide = 1; // HARUS SESUAI DENGAN YANG DI SCOPE DI ATAS
                    $slideClient.css('left', 0);
                }
            });
        }, pauseClient);
    }

    startSlider();
});

// PARTNER
$(function () {
    //config
    var width = 100 + '%';
    var animationSpeed = 1000;
    var pausePartner = 5000;
    var currentSlide = 1;

    //DOM 
    var $slidePartner = $('.slider').find('#slide-partner');
    var $slideItemPartner = $slidePartner.find('.slide-item');

    function startSlider() {
        interval = setInterval(function() {
            $slidePartner.stop(true, true).animate({ 'left': '-=' + width }, animationSpeed, function () {
                currentSlide++;
                if (currentSlide === $slideItemPartner.length) {
                    currentSlide = 1;
                    $slidePartner.css('left', 0);
                }
            });
        }, pausePartner);
    }

    startSlider();
});

/* ALL REGISTER FORM ANIMATION AND EFFECTS */

$(document).ready(function () {
    var index = 0;

    var buttonLabel = $('.button-label');
    var clickLi = $('.dummy-li');
    var radioItem = $(buttonLabel).find('.radio-item');

    var choose = $('.choose-package');
    var next = $('.next-button');
    var back = $('.back-button');
    var loader = $('.loader');

    var name = $('#name'),
        birth_place = $('#birth_place'),
        birth_date = $('#birth_date'),
        email = $('#email'),
        phone_number = $('#phone_number'),
        address_province = $('#provinces'),
        address_regency = $('#regencies'),
        address_district = $('#districts'),
        specify_address = $('#specify_address'),
        captcha = $('#g-recaptcha-response');

    var errorMsg = $('.invalid-feedback'),
        errorMsg2 = $('.text-danger');

    showForms(index);

    function plusIndex() {
        $(loader).show();
        setTimeout(function () {
            showForms(index += 1);
            $(loader).hide();
        }, 300);
        $(this).not('#identity-next').attr('disabled', true);
        $(back).attr('disabled', false);
    }

    function minusIndex() {
        $(loader).show();
        setTimeout(function () {
            $(back).attr('disabled', false);
            showForms(index -= 1);
            $(loader).hide();
        }, 300);
        $(this).attr('disabled', true);
        $('.dummy-li.active').closest(buttonLabel).find(choose).attr('disabled', false);
    }

    function showForms(index) {
        var i;
        var forms = $('.register-form').find('.form-wrapper');
        var progressBar = $('.bar-p');
        for (i = 0; i < forms.length; i++) {
            $(forms[i]).css('display', 'none');
            $(birth_date).attr({ 'min': false, 'max': false });
        }
        for (i = 0; i < progressBar.length; i++) {
            $(progressBar[i]).removeClass('active');
        }
        if ($(errorMsg).css('display') === 'block' || $(errorMsg2).css('display') === 'inline') {
            index += 1;
        }
        if (index > forms.length - 1) {
            $(forms.length - 1).css('display', 'block');
            index = forms.length - 1;
        }
        $(forms[index]).css('display', 'block');
        $(progressBar[index]).addClass('active').nextAll().removeClass('completed');
        $(progressBar[index]).addClass('active').prevAll().addClass('completed');
    }


    /* ADD ACTIVE TO BUTTON LABEL IF THERES CHECKED CHILD ELM. */


    $('.choose-package').attr('disabled', true);
    $(radioItem).click(function () {
        $(buttonLabel).removeClass('active');
        $('.button-planned').find('li').removeClass('active');
        $(this).closest(clickLi).addClass('active').closest(buttonLabel).addClass('active');
        if ($(this).is(':checked')) {
            $('.choose-package').not(this).attr('disabled', true);
            $(this).closest('.button-planned').find($('.choose-package')).removeAttr('disabled');
        }
        else {
            $(this).closest('.button-planned').find($('.choose-package')).attr('disabled', true);
        }
        sessionStorage.setItem('activeLabel', $(this).closest('.button-label').index('.button-label'));
        sessionStorage.setItem('activeLi', $(this).closest('.dummy-li').index('.dummy-li'));
        sessionStorage.setItem('checkedRadio', $(this).index('.radio-item'));
        sessionStorage.setItem('choosePackage', $(this).closest('.button-planned').find('.choose-package').index('.choose-package'))
    });

    var activeLabel = sessionStorage.getItem('activeLabel');
    var activeLi = sessionStorage.getItem('activeLi');
    var checkedRadio = sessionStorage.getItem('checkedRadio');
    var choosePackage = sessionStorage.getItem('choosePackage');
    if (activeLabel) {
        $('.button-label').removeClass('active').eq(activeLabel).addClass('active');
    }
    if (activeLi) {
        $('.button-planned').find('.dummy-li').removeClass('active').eq(activeLi).addClass('active');
    }
    if (checkedRadio) {
        $('.radio-item').attr('checked', false).eq(checkedRadio).attr('checked', true);
    }
    if (!checkedRadio) {
        $('.choose-package').attr('disabled', true);
    }
    if (choosePackage) {
        $('.choose-package').attr('disabled', true).eq(choosePackage).removeAttr('disabled');
    }

    /* SHOW NEXT BUTTON IN IDENTITY PAGE */

    $('#identity-next').attr('disabled', true);
    function checkFilled() {
        $('form').on('keyup change', function () {
            if ($(name).val() != "" && $(birth_place).val() != 0 && $(birth_date).val() != ""
                && $(email).val() != "" && $(phone_number).val() != "" && $(address_province).val() != 0
                && $(address_regency).val() != 0 && $(address_district).val() != 0 && $(specify_address).val() != 0
                && $(captcha).val() != "") {
                $('#identity-next').attr('disabled', false);
                return true;
            }
            else {
                $('#identity-next').attr('disabled', true);
                return false;
            }
        });
    }

    checkFilled()

    /* INDEX CONTROL */

    $(choose, next).click(function() {
        plusIndex();
        setTimeout(function() {
            window.scrollTo(0, 0);
        }, 300);
    });
    $(back).click(function() {
        minusIndex();
        setTimeout(function() {
            window.scrollTo(0, 0);
        }, 300);
    });
});

/* MODAL CONTROLLER */

$(document).ready(function () {
    var index = 0;
    var imgPop = $('.img-pop');
    var modal = $('#faq');
    var modalIcon = $('.modal-icon');
    var contents = $('#faq-content').find('.form-wrapper');
    var modalNext = $('.modal-next-button');
    var modalBack = $('.modal-back-button');
    var faqControl = $('.faq-control');

    showFaq(index);

    function plusIndex() {
        showFaq(index += 1);
    }

    function minusIndex() {
        showFaq(index -= 1);
    }

    function showFaq(index) {
        var i;

        for (i = 0; i < contents.length; i++) {
            $(contents[i]).css('display', 'none');
        }
        for (i = 0; i < faqControl.length; i++) {
            $(faqControl[i]).removeClass('active');
        }
        $(contents[index]).css('display', 'block');
        $(faqControl[index]).addClass('active');
    }

    /* INDEX CNTROLLER */

    function modalControl() {   
        function hideShowBack() {
            if (index < 1) {
                $(modalBack).css('display', 'none');
            }
            if (index > 0) {
                $(modalBack).css('display', 'block');
            }
        }
        function hideShowNext() {
            if (index > (contents.length - 2)) {
                $(modalNext).css('display', 'none');
            }
            if (index < (contents.length - 1)) {
                $(modalNext).css('display', 'block');
            }
        }
        hideShowBack();
        hideShowNext();
    }

    $(imgPop).click(function () {
        var indexFind = $(imgPop).index(this);
        $(modal).css('display', 'block');
        setTimeout(function () {
            $(modal).css('opacity', 1);
        }, 200);
        index = indexFind;
        showFaq(index);
        modalControl();
    });

    $(modalIcon).click(function () {
        $(modal).css('opacity', 0);
        setTimeout(function () {
            $(modal).css('display', 'none');
        }, 200);
    });

    $(modalBack).click(function () {
        if (index > 0) {
            minusIndex();
            $(modalNext).css('display', 'block');
        }
        if (index < 1) {
            $(this).css('display', 'none');
        }
    });

    $(modalNext).click(function () {
        if (index < (contents.length - 1)) {
            plusIndex();
            $(modalBack).css('display', 'block');
        }
        if (index > (contents.length - 2)) {
            $(this).css('display', 'none');
        }
    });

    $(faqControl).click(function () {
        var indexFind = $(faqControl).index(this);
        index = indexFind;
        showFaq(index);
        modalControl();
    });

    /* CLOSE MODAL KALO CLICK DIMANA SAJA KECUALI CHILD ELEMENTNYA SI MODAL ITU SENDIRI */

    $(modal).click(function (e) {
        if (e.target == this) {
            $(modal).css('opacity', 0);
            setTimeout(function () {
                $(modal).css('display', 'none');
            }, 200);
        }
    });
});

/* SMOOTH SCROLLING */
/* Select all links with hashes */
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {

        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });

/* RUBI CHANDRAPUTRA, SEBAGAI  PROJEK MAGANG PT.AKPA @2019 */
/* email: rubichandrap@gmail.com */