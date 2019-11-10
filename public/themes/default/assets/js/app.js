/**
 * RFVenomCore - App.js
 *
 * @author RFVenom Design SIAT Dev (Ryan Fitra -- RFV --)
 *
 * @version 1.1.3 -- 04 Mei 2019 -- Update -- 09 Aug 2019
 */

var body = $('body'),
    wrapper = "preloader-wrapper",
    site = "preloader-site",
    svg = "";
body.addClass(site);

if(!$('div').hasClass(wrapper))
{
    svg = '<figure><?xml version="1.0" encoding="UTF-8" standalone="no"?>\n' +
        '<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="34px" height="34px" viewBox="0 0 128 128" xml:space="preserve">\n' +
        '<style type="text/css">\n' +
        '  .circle-preloader-0{fill:#377DFF;}\n' +
        '</style>\n' +
        '  <g>\n' +
        '    <path class="circle-preloader-0" d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z"/>\n' +
        '    <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="800ms" repeatCount="indefinite"></animateTransform>\n' +
        '  </g>\n' +
        '</svg></figure>';

    $('<div class="'+wrapper+' app">\n' +
        '    <div class="preloader">\n' +
        '        <h6 class="text-loader text-nowrap">Memuat Halaman ...</h6>\n' +
        '        '+ svg +'\n' +
        '    </div>\n' +
        '</div>').appendTo(body);
}

$( document ).ready(function() {

    $('.'+wrapper).fadeOut();
    $('body').removeClass(site);

});