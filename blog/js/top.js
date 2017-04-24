
jQuery(window).scroll(function (){
    if (jQuery(this).scrollTop() > 0) {
        jQuery(".nav").addClass("fixed");
    }
    else {
        jQuery(".nav").removeClass("fixed");
    }
});
