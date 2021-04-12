$(document).ready(function(){
    $(".marker-up").click(function(){
        let details = $(this).closest(".details");
        details.removeAttr("open");

    });

    $(".marker-down").click(function(){
        let details = $(this).closest(".details");
        details.attr("open",true);
        details.children(".summary").focus();
    });
});