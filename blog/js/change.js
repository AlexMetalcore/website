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
