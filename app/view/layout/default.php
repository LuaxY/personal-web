<!DOCTYPE html>
<html lang="fr">
<head>
    <title>{% if title is defined %}{{ title }} - {% endif %}{{ webtitle }}</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.gif') }}" />
    <link rel="stylesheet" href="{{ asset('styles/milk.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/default.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/octicons.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div class="container menu-top">
                <ul class="header-navbar">
                    <li><a href="{{ url('') }}" name="home">Luax</a></li>
                    <li><a href="{{ url('blog') }}" name="blog">Blog</a></li>
                </ul>

                <!--<form class="header-search pull-right" action="{{ url('') }}" method="GET">
                    <input type="hidden" name="a" value="" />
                    <input class="field" type="search" placeholder="Recherche..." maxlength="200" name="q" />
                    <input class="button" type="submit" value="Rechercher" />
                </form>-->
            </div>
        </div>

        <div id="page">
            {{ block('page') }}
        </div>
        <div id="extra" style="display:none"></div>
        <div id="footer-push"></div>
    </div>

    <div id="footer">
        <div class="container">
            <dl class="footer-nav">
                <dt>Luax</dt>
                <dd><a href="{{ url('') }}">A propos</a></dd>
                <dd><a href="{{ url('blog') }}">Blog</a></dd>
                <dd><a href="mailto:yann.guineau@voidmx.net">Contact</a></dd>
            </dl>
            <dl class="footer-nav">
                <dt>Retrouvez moi...</dt>
                <dd><a href="https://twitter.com/LuaxY_" target="_blank">sur Twitter</a></dd>
                <dd><a href="https://github.com/LuaxY" target="_blank">sur GitHub</a></dd>
                <dd><a href="https://bitbucket.org/Catbug" target="_blank">sur BitBucket</a></dd>
                <dd><a href="skype:yann.0x?add">sur Skype</a></dd>
            </dl>
            <div class="clearfix"></div>
            <hr class="divider" />
            <p class="pull-right"><span class="octicon octicon-code"></span> avec <span class="octicon octicon-heart"></span> par <a href="https://github.com/LuaxY/personal-web" target="_blank">Luax</a>, design <span class="octicon octicon-repo-forked"></span> sur <a href="http://steamdb.info/">SteamDB</a></p>
            <p class="copyright"><span class="octicon octicon-star"></span> <a href="{{ url('') }}">Luax</a> <?php echo date('Y'); ?></p>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gist-embed/1.8/gist-embed.min.js"></script>
    <script src="{{ asset('scripts/script.js') }}"></script>
    <script>checkActiveMenu('{{ pagename }}');</script>
</body>
</html>