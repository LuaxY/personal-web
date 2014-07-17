$(".spoiler > span > input").click(function() {
    if($(this).val() == "Afficher") {
        $(this).val("Masquer");
        $(this).parent().parent().find(".block").show();
    } else {
        $(this).val("Afficher");
        $(this).parent().parent().find(".block").hide();
    }
});

$(document).on('click', 'a', function() {
    if($(this).attr('href')[0] != '/')
        return true;

    var page = $(this).attr('href');

    $("#page").html('<div align="center" style="margin-top:100px"><img src="/images/loader.gif" /><br /><br />Chargement en cours...</div>');

    $.ajax({
        url: page,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $("#page").html('');
            $("#page").html(data.page);

            if(data.title != null)
                document.title = data.title + " - Luax, software developper";

            window.history.pushState({path:page}, '', page);
            checkActiveMenu(data.pagename);
        },
        /*error: function(result, status, error) {

        }*/
    });

    return false;
});

function checkActiveMenu(current) {
    $(".header-navbar").find(".active").removeClass("active");
    var active = $(".header-navbar").find("a[name='" + current + "']");
    active.parent().addClass("active");
}