jQuery(document).on('ready', function($) {
    "use strict";

    /**=========================
        LOADER
    =========================**/
    $(window).on('load', function() {
        $('#loader').fadeOut('slow',function(){$(this).remove();});
    });

    
 /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle, .faq-item .faq-header').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  
}(jQuery)); // End jQuery