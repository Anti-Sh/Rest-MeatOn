$(function(){
    $(".reg").hide();
    $(".tel").mask('+7 (999) 999-99-99');

    $(".switch").on("click", function(){
        $(".reg").toggle(500)
        $(".auth").toggle(500);
    });
    $("")
    
});