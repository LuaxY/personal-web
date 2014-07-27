{% extends 'layout/default.php' %}

{% block page %}
<div class="header-wrapper" style="background-image:url('{{ asset('images/back/bg_blog.png') }}')">
    <div class="container">
        <h1 class="header-title">Article non trouvé !</h1>
    </div>
</div>

<div id="container-404">
    <div class="title-404" style="width:350px">
        <div class="label-404">404</div>
        Article non trouvé !
    </div>
    <div>
        <a class="button-404" href="{{ url('blog') }}">BLOG</a>
        <a class="button-404" href="javascript:history.back()">RETOUR</a>
    </div>
</div>
{% endblock %}