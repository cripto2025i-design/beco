jQuery(document).on('ready', function($) {
    "use strict";

    /**=========================
        LOADER
    =========================**/
    $(window).on('load', function() {
        $('#loader').fadeOut('slow',function(){$(this).remove();});
    });

    

}(jQuery)); // End jQuery