$(document).ready(function(){
    
    //prevent disqus load bottom
    $(this).scrollTop(0);
    $(document).scrollTop(0);
    
    $('.text-expand').click(function(){
        $(this).next("div").toggle();
        if($(this).next("div").css('display') == 'block'){
            $(this).show();
            $(this).css({
            "color": "#1ABC9C",
            "background-color": "#fff",
            "border": "2px solid #1ABC9C"
        });
        }else{
            $(this).hide();
            $(this).css({
            "color": "#fff",
            "background-color": "#1ABC9C"
        });
        }
    });
});