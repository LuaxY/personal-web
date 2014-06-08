{% extends 'layout/default.php' %}

{% block content %}
<div id="blog">
    <div class="left-col">
        {% for p in posts %}
        <div class="post">
            <p><img src="{{ asset('images/flags/' ~ p.lang ~ '.png') }}" class="icon" alt="{{ p.lang }}" /> <img src="{{ asset('images/flags/' ~ p.icon) }}" class="icon" alt="{{ p.name }}" /> <?php echo strtolower(date('l d F Y', strtotime("{{ p.date }}"))); ?></p>
            <hr /><br />
            <h1>{{ p.title }}</h1>
            <br />
            {{ p.content|raw}}
            <p><a href="{{ url('blog/' ~ p.slug) }}#disqus_thread">commentaire(s)</a></p>
        </div>
        {% endfor %}
    </div>
    <div class="right-col">
        <div class="menu">
            <h3>Catégories</h3>
            <hr />
        </div>
    </div>
</div>
{% endblock %}