{% extends 'layout/default.php' %}

{% set background = 'bg_blog.png' %}
{% set title_left = 'Blog' %}

{% block content %}
<div class="container">
    {% for p in posts %}
    <div class="post">
        <p><img src="{{ asset('images/flags/' ~ p.lang ~ '.png') }}" class="icon" alt="{{ p.lang }}" /> <img src="{{ asset('images/flags/' ~ p.icon) }}" class="icon" alt="{{ p.name }}" /> <?php echo strtolower(date('l d F Y', strtotime("{{ p.date }}"))); ?></p>
        <h1>{{ p.title }} <a href="{{ url('blog/post/' ~ p.slug) }}"><span class="octicon octicon-link"></span></a></h1>
        {{ p.content|raw}}
        <p><a href="{{ url('blog/post/' ~ p.slug) }}#disqus_thread">commentaire(s)</a></p>
        <hr />
    </div>
    {% endfor %}
</div>
{% endblock %}