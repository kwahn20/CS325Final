$(document).ready(function(){
    $(window).scroll(function (){
        if($(window).scrollTop() == 0){
            $('#toolBarBox').attr("class", "hidden");
        }
        else{
            $('#toolBarBox').attr("class", "visible");
        }
    });
});