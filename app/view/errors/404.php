{% extends 'layout/default.php' %}

{% block content %}
<h1>Page introuvable</h1>
<div class="alert-message error">&nbsp;&nbsp;{{ message }}</div>
<br />
<i>&nbsp;&nbsp;Retournez sur la page d'accueil en cliquant ici : <a href="{{ url('') }}">accueil</a>.</i>
{% endblock %}