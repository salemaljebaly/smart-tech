$(function () {

    // check if the window less than 768 px then put nav top property to 0

    // show scroll top element
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 50) {
            $('.scroll-top').css('right', '20px');
            console.log('more 200');
            // set nav bar top to 0
            $('.navbar').css('top','0');
        } else if($(window).scrollTop() <= 50){
            console.log('less 200');
            $('.navbar').css('top','35px');
            $('.scroll-top').css('right', '-60px');
        }
    });

    // change the direction when the language changed base on url change
    if (window.location.href.indexOf("en") > -1) {
        // jQuery('body').css('direction', 'rtl');
        console.log('english');
    } else {
        console.log('arabic');
        // set every text to right
        jQuery('.our-clients h2').text("العلامات التجارية");
        jQuery('.distributors h2').text("موزعين معتمدين لدى");
        jQuery('.about-us .content h2').text("حول الشركة");
        jQuery('.about-us .st-btn').text("أقرأ المزيد");
        jQuery('.about-us .content p').text("شركة سمارت تك هي شركة ليبية تأسست عام 2016 ومقرها الرئيسي في شارع الإذاعة، وافتتح الفرع الثاني مؤخرا في عام 2020 وهي شركة متخصصة في الخدمات الإلكترونية ، نسعى جاهدين لتقديم خدمات أمنية وتقنية فريدة خدمات. في أعمالنا نتطلع أيضًا إلى أن نكون الرائدين على المستوى المحلي في مجالنا وأن نحقق أوسع انتشار وتوسع في المنطقة ، وأن تصل منتجاتنا وخدماتنا إلى جميع الأطراف والشركات والمؤسسات والأفراد.\n" +
            "\n");
        // set arabic strings to services
        $( ".services div:nth-child(1) h3" ).text("حواسيب");
        $( ".services div:nth-child(2) h3" ).text("اكسسوارات");
        $( ".services div:nth-child(3) h3" ).text("كاميرات مراقبة");
        $( ".services div:nth-child(4) h3" ).text("درونس");
    }
    // go to top
    $('.scroll-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1000);
    });

    // slick slider
    // $('.brands-logo').slick({
    //     slidesToShow: 5,
    //     slidesToScroll: 1,
    //     dots:true,
    //     arrows: false,
    //     autoplaySpeed:2000,
    //     fade: true,
    //     infinite: true
    // });
});