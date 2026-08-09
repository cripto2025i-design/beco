jQuery(document).on('ready', function($) {
    "use strict";


    
document.addEventListener('DOMContentLoaded', () => {
  initFaq();

});
    /**=========================
        LOADER
    =========================**/
    $(window).on('load', function() {
        $('#loader').fadeOut('slow',function(){$(this).remove();});
    });

  
    $(".search-trigger, .main-search-input").on("click", function (e) {
            e.stopPropagation();
      });
    // Accrodion 
     /**
      * file:///D:/DesignWeb/theme_lock/01-buildx-html/assets/js/script.js
      
      */

  if ($(".accrodion-grp").length) {
    var accrodionGrp = $(".accrodion-grp");
    accrodionGrp.each(function () {
      var accrodionName = $(this).data("grp-name");
      var Self = $(this);
      var accordion = Self.find(".accrodion");
      Self.addClass(accrodionName);
      Self.find(".accrodion .accrodion-content").hide();
      Self.find(".accrodion.active").find(".accrodion-content").show();
      accordion.each(function () {
        $(this)
          .find(".accrodion-title")
          .on("click", function () {
            if ($(this).parent().hasClass("active") === false) {
              $(".accrodion-grp." + accrodionName)
                .find(".accrodion")
                .removeClass("active");
              $(".accrodion-grp." + accrodionName)
                .find(".accrodion")
                .find(".accrodion-content")
                .slideUp();
              $(this).parent().addClass("active");
              $(this).parent().find(".accrodion-content").slideDown();
            }
          });
      });
    });
  }

    
 /**
  * file:///D:/DesignWeb/htmlcar/Clinic-1.0.0/faq.html
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item .faq-header').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  

 /*** // FAQ Accordion D:/DesignWeb/2026/consulohtml-10/assets/js/main.js
class FaqAccordion extends HTMLElement {
  constructor() {
    super();
    this.opener = this.querySelectorAll(".accordion-opener");
  }

  connectedCallback() {
    this.opener.forEach((opener) => {
      opener.addEventListener("click", this.toggleHeight.bind(this));
    });

    this.firstBlock = this.querySelector(".accordion-block");
    if (this.firstBlock) {
      this.firstContent = this.firstBlock.querySelector(".accordion-content");
      this.firstBlock.classList.add("active");
      this.firstContent.style.maxHeight = this.firstContent.scrollHeight + "px";
    }
  }

  toggleHeight(event) {
    this.accBlock = event.target.closest(".accordion-block");
    this.accContent = this.accBlock.querySelector(".accordion-content");

    this.querySelectorAll(".accordion-block").forEach((block) => {
      this.content = block.querySelector(".accordion-content");

      if (block !== this.accBlock) {
        block.classList.remove("active");
        this.content.style.maxHeight = null;
      }
    });

    this.accBlock.classList.toggle("active");

    if (this.accBlock.classList.contains("active")) {
      this.accContent.style.maxHeight = this.accContent.scrollHeight + "px";
    } else {
      this.accContent.style.maxHeight = null;
    }
  }
}

customElements.define("faq-accordion", FaqAccordion);*/

  /* FAQ ACCORDION brique-and-clic */
function initFaq() {
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });
}
  
}(jQuery)); // End jQuery