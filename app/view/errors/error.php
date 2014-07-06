{% extends 'layout/default.php' %}

{% block page %}
<div id="container-404">
    <div class="title-404">
        <div class="label-404">{{ error_title }}</div>
        {{ message }}
    </div>
    <div>
        <a class="button-404" href="{{ url('') }}">ACCUEIL</a>
        <a class="button-404" href="javascript:history.back()">RETOUR</a>
    </div>
</div>
{% endblock %}