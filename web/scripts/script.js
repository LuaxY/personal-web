$(document).on('click', '.spoiler > span > input', function() {
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

    var url = $(this).attr('href');
    window.history.pushState({path: url}, '', url);
    loadPage(url);
    return false;
});

$(window).bind('popstate', function(event) {
    loadPage(location.pathname);
});

function loadPage(url)
{
    $("#page").html('<div align="center" style="margin-top:100px"><img src="http://yann.voidmx.net/images/loader.gif" /><br /><br />Chargement en cours...</div>');

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $("#page").html(data.page);
            $("#extra").html(data.extra);

            if(data.pagetitle != null)
                document.title = data.pagetitle + " - " + data.webtitle;
            else
                document.title = data.webtitle;

            checkActiveMenu(data.pagename);
        },
        /*error: function(result, status, error) {

        }*/
    });
}

function checkActiveMenu(current) {
    $(".header-navbar").find(".active").removeClass("active");
    var active = $(".header-navbar").find("a[name='" + current + "']");
    active.parent().addClass("active");
}