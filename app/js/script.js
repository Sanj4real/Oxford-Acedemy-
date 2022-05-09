document.addEventListener("DOMContentLoaded", function () {
    // make it as accordion for smaller screens
    if (window.innerWidth > 992) {

        document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

            everyitem.addEventListener('mouseover', function (e) {

                let el_link = this.querySelector('a[data-bs-toggle]');

                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }

            });
            everyitem.addEventListener('mouseleave', function (e) {
                let el_link = this.querySelector('a[data-bs-toggle]');

                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }


            })
        });

    }
    // end if innerWidth
});
// DOMContentLoaded  end

// owl-carousel
$('.slider__wrap').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

// owl-carousel
$('.testimonial__slider').owlCarousel({
    loop: true,
    nav: true,
    navText : ['<i class="las la-long-arrow-alt-left" aria-hidden="true"></i>','<i class="las la-long-arrow-alt-right" aria-hidden="true"></i>'],
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

// faq
$(".accordion-content").css("display", "none");

$(".accordion-title").click(function () {
    $(".accordion-title").not(this).removeClass("open");
    $(".accordion-title").not(this).next().slideUp(300);
    $(this).toggleClass("open");
    $(this).next().slideToggle(300);
});


// top
// scroll-top-button
$(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
        $("#scrollToTopBtn").fadeIn("slow");
    } else {
        $("#scrollToTopBtn").fadeOut("slow");
    }
});
$("#scrollToTopBtn").bind("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 1200);
    return false;
});


// 
// scrollup
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $(".smart-scroll").addClass("scrollUp");
    } else {
        $(".smart-scroll").removeClass("scrollUp");
    }
  });