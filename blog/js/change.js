/*jQuery(document).ready(function () {
    var action = jQuery('.menu a');
      action.click(this ,function (){
          //if (jQuery('.menu a').hasClass('active')){
      //action.removeClass('active');
        //  }
          //else {
          //jQuery(this).addClass('active');
          //}
          jQuery(this).toggleClass("active");
   }); 
});*/
jQuery(document).ready(function(){
jQuery('.nav .menu a').each(function () {
        var action = jQuery('.nav .menu a');
        var location = window.location.href;
        var link = this.href; 
        if(location == link) {
                jQuery(this).addClass('active');
            }
    });
});