$(".spoiler > span > input").click(function() {
    if($(this).val() == "Afficher") {
        $(this).val("Masquer");
        $(this).parent().parent().find(".block").show();
    } else {
        $(this).val("Afficher");
        $(this).parent().parent().find(".block").hide();
    }
});