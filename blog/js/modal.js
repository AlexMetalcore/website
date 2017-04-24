jQuery(document).ready(function () {
jQuery(document).on("click" , "#log" , function (event){
    jQuery(".formlog , .overlay").fadeIn(500);
});
    jQuery(document).on("click" , ".overlay , span.close" , function (){
    jQuery(".formlog , .overlay").fadeOut(500);
});
    jQuery(document).on("click" , "#reg" , function (event){
    jQuery(".formreg , .overlay").fadeIn(500);
});
    jQuery(document).on("click" , ".overlay , span.close" , function (){
    jQuery(".formreg , .overlay").fadeOut(500);
});
    jQuery(document).on("click" , ".comment" , function (event){
    jQuery(".formlog , .overlay").fadeIn(500);
});
    jQuery(document).on("click" , ".overlay , span.close" , function (){
    jQuery(".formlog , .overlay").fadeOut(500);
});

});