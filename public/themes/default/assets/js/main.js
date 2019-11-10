setTimeout( function(){
        $("#header-case").slideDown();
    }, 2000
);

$(document).ready(function(){
    "use strict";

    var window_width 	 = $(window).width(),
        window_height 		 = window.innerHeight,
        header_height 		 = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen 			 = window_height - header_height;


    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);


    // -------   Active Mobile Menu-----//

    $(".menu-bar").on('click', function(e){
        e.preventDefault();
        $("nav").toggleClass('hide');
        $("span", this).toggleClass("lnr-menu lnr-cross");
        $(".main-menu").addClass('mobile-menu');
    });

    //$('select').niceSelect();

    //  Counter Js

    // $('.counter').counterUp({
    //     delay: 10,
    //     time: 1000
    // });


    $(document).ready(function() {

        $.RFVCore.components.RFVmScrollBar.init($('.js-scrollbar'));
        
        // carusel

        $('.peraturan-terbaru').owlCarousel({
            items:1,
            loop:true,
            nav: false,
            //animateOut: 'fadeOut',
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            autoplay: true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        });

        $('.image-slider').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            navText: [
                '<svg class="owl-nav-svg" width="25" height="25" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
                '<svg class="owl-nav-svg" width="25" height="25" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>'
            ],
            autoplay: true,
            autoplayTimeout:10000,
            autoplayHoverPause:true
        });

/*         // chart

        var chart = c3.generate({
            bindto: '#chart-pie', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', 57],
                    ['data2', 38],
                    ['data3', 4],
                    ['data4', 0],
                ],
                type: 'pie', // default type of chart
                // colors: {
                //     'data1': tabler.colors["green"],
                //     'data2': tabler.colors["green-light"]
                // },
                names: {
                    // name of each serie
                    'data1': 'Tersedia Setiap Saat',
                    'data2': 'Berkala',
                    'data3': 'Serta Merta',
                    'data4': 'Dikecualikan',
                }
            },
            axis: {
            },
            legend: {
                position: 'right',
                //show: false, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
 */
        $('#feel-the-wave').wavify({
            height: 40,
            bones: 5,
            amplitude: 30,
            color: 'rgba(255, 255, 255, .85)',
            speed: .15
        });

        $('#feel-the-wave-two').wavify({
            height: 30,
            bones: 5,
            amplitude: 40,
            color: 'rgba(255, 255, 255, .65)',
            speed: .25
        });
    });
});
