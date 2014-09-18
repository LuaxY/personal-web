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

var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
var colorIndices = [0,1,2,3];
var gradientSpeed = 0.002;

function updateGradient()
{
    var c0_0 = colors[colorIndices[0]];
    var c0_1 = colors[colorIndices[1]];
    var c1_0 = colors[colorIndices[2]];
    var c1_1 = colors[colorIndices[3]];

    var istep = 1 - step;
    var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
    var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
    var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
    var color1 = "#"+((r1 << 16) | (g1 << 8) | b1).toString(16);

    var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
    var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
    var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
    var color2 = "#"+((r2 << 16) | (g2 << 8) | b2).toString(16);

    $('#gradient').css({
        "background": "-webkit-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "   -moz-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "    -ms-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "     -o-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "        linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)"
    });

    step += gradientSpeed;
    if ( step >= 1 )
    {
        step %= 1;
        colorIndices[0] = colorIndices[1];
        colorIndices[2] = colorIndices[3];
        colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
        colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    }
}