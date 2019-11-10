/**
 * RFVenomCore -
 *
 * @author RFVenom Design SIAT Dev
 * @version 1.0
 */
;
(function ($) {

    'use strict';

    $.RFVCore = {

        /**
         *
         *
         * @param
         *
         * @return
         */
        init: function () {

            $(document).ready(function (e) {
                // Botostrap Tootltips
                $('[data-toggle="tooltip"]').tooltip();

                // Bootstrap Popovers
                $('[data-toggle="popover"]').popover();

            });

        },

        /**
         *
         *
         * @var
         */
        components: {},

        /**
         *
         *
         * @var
         */
        helpers: {},

        // Settings
        settings: {
            animationEasing: 'easeInQuad', // example:
            animationDuration: 450, // example:
            rtl: false
        }

    };

    $.RFVCore.init();

})(jQuery);