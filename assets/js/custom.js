$(document).ready(function () {

        // Map URLs (Google Maps embed links)
    const mapData = {
        "mulund": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482370.08957437065!2d72.941535!3d19.172638!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b85718ee32a7%3A0xb0ca383b8dd97e27!2sMetamorphosis%20Clinic!5e0!3m2!1sen!2sus!4v1774594046104!5m2!1sen!2sus",
        "powai": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482525.2538145051!2d72.913839!3d19.119561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7fabf36893d%3A0xb4fa1fa04d2e9d6a!2sMetamorphosis%20Clinic!5e0!3m2!1sen!2sus!4v1774594069128!5m2!1sen!2sus",
        "ghatkopar": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482641.5657690742!2d72.904316!3d19.079681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c62bf675bac1%3A0x3923eb01d49958b2!2sMetamorphosis%20ghatkopar!5e0!3m2!1sen!2sin!4v1774595182202!5m2!1sen!2sin",
        "bandra": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482667.94254487037!2d72.83536900000001!3d19.070626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c90d689affff%3A0xe474a5b0940fb2c!2sMetamorphosis%20Clinic%20-%20Skin%20%26%20Hair%20Specialist%20in%20Bandra%2C%20Mumbai%20%7C%20Dermatologist%20in%20Bandra!5e0!3m2!1sen!2sus!4v1774595217465!5m2!1sen!2sus",
        "andheri": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482476.6357930622!2d72.830462!3d19.136207!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6e94ebe2a0b%3A0x63f60dba1556c277!2sMetamorphosis%20Clinic!5e0!3m2!1sen!2sus!4v1774595266706!5m2!1sen!2sus",
        "vashi": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482625.40458736377!2d73.007682!3d19.085227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c163b46681b7%3A0x922e4f3940fdce13!2sMetamorphosis%20Clinic!5e0!3m2!1sen!2sus!4v1774595305133!5m2!1sen!2sus",
        "charni-road": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7728174.513923351!2d72.818175!3d18.952509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cfc9ab90e935%3A0xc95c47856d03200b!2sMetamorphosis%20Clinic!5e0!3m2!1sen!2sus!4v1774596123535!5m2!1sen!2sus",
        "greater-kailash": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d533480.6249510102!2d77.27635931519872!3d28.54865463556019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce32b72ffb949%3A0xcc978e2526f9f57a!2sMetamorphosis%20Clinic!5e0!3m2!1sen!2sus!4v1774595387734!5m2!1sen!2sus",
        "green-park": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d448526.03483022086!2d77.192366!3d28.56647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce273b43d0805%3A0x9d4692afd8636c78!2sMetamorphosis%20Clinic%20%7C%20Skin%20%26%20Hair%20Specialist%20in%20Safdarjung%20Enclave%2C%20New%20Delhi!5e0!3m2!1sen!2sus!4v1774595438769!5m2!1sen!2sus"
    };
    const $iframe = $('.map-wrapper iframe');

    $('.state-wrapper ul li').on('click', function () {

        const state = $(this).data('state').toLowerCase();

        $(this).addClass('active').siblings().removeClass('active');

        const $cityList = $('#' + state);

        $cityList.addClass('show').siblings('ul').removeClass('show');

        const $firstCity = $cityList.find('li').first();

        const city = $firstCity.data('city').toLowerCase();

        $firstCity.addClass('active').siblings().removeClass('active');

        if (mapData[city] && $iframe.attr('src') !== mapData[city]) {
            $iframe.attr('src', mapData[city]);
        }

    });

    $('.city-wrapper ul li').on('click', function () {

        // Get city value
        var city = $(this).data('city').toLowerCase();

        // Active class handling
        $(this).addClass('active').siblings().removeClass('active');

        // Update iframe src
        if (mapData[city]) {
            $iframe.attr('src', mapData[city]);
        }

    });

    $('.faq-question').on('click', function () {

        const $item = $(this).closest('.faq-item');

        // Close others
        $('.faq-item').not($item).removeClass('active')
            .find('.faq-answer').slideUp();

        // Toggle current
        $item.toggleClass('active');
        $item.find('.faq-answer').stop(true, true).slideToggle();

    });

    var testimonialSlider = new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            768: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 2
            }
        }

    });

    const beforeAfterSwiper  = new Swiper(".beforeAfterSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            768: {
                slidesPerView: 2
            }
        }
    });

});
