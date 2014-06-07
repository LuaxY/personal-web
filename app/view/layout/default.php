<!DOCTYPE html>
<html>
<head>
    <title>Yann Guineau, Software developper</title>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <link rel="stylesheet" href="{{ asset('styles/default.css') }}" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body id="page-index">
    <div id="header-wrapper">
        <div id="header">
            <div>
                <a class="logo" href="/"><img src="{{ asset('images/logo.png') }}" height="50" /></a>
                <ul class="nav">
                    <li><a href="http://yann.voidmx.net">Retour au site</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div class="sub-head">
            <div class="breadcrumbs">
                <span><a href="<?php echo Router::url($this->request->controller); ?>"><?php echo $this->request->controller; ?></a></span> / <span><?php echo ucfirst($this->request->action); ?></span>
            </div>
            <ul class="sub-nav">
                <li class="btn about"><a href="/pages/about-us"><span>&nbsp;</span>A propos</a></li>
                <li class="btn about"><a href="/pages/faq"><span>&nbsp;</span>FAQ</a></li>
                <li class="cart"><span>3</span><a href="/cart" id="btn_cart">Voir le panier</a></li>
            </ul>
        </div>

        <div class="content">

            <?php echo $this->Session->flash(); ?>
            {% block content %}{% endblock %}

        </div><!-- .content -->
    </div><!-- #wrapper -->

    <div id="footer-wrapper">
        <div id="footer">
            <div class="lower_footer">
                <div class="footer_inner clearfix">
                    <div id="legal">
                        <ul id="legal_links">
                            <li><a href="/pages/about-us">A propos</a></li>
                            <li><a href="/pages/faq">FAQ</a></li>
                            <li><a href="http://yann.voidmx.net/">Site web</a></li>
                        </ul>
                        <p>&copy; <span id="year">2014</span> <b>Yann Guineau</b> - yann.guineau@voidmx.net.</p>
                    </div>
                    <div class="code-by">
                        <img alt="code-by" src="{{ asset('images/code-by.png') }}" height="15" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('scripts/shop.js') }}"></script>
</body>
</html>