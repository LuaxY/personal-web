{% extends 'layout/default-header.php' %}

{% set background = 'bg_blog.png' %}
{% set title_left = 'Blog' %}

{% block content %}
<div class="container">
    {% for p in posts %}
    <div class="post post-multiple">
        <h1><a href="{{ url('blog/post/' ~ p.slug) }}">{{ p.title }}</a></h1>
        <span class="post-date">Par <a>Yann</a> le <?php echo strtolower(date('j F Y', strtotime("{{ p.date }}"))); ?></span>
        {{ p.content|raw}}
        <hr />
    </div>
    {% endfor %}
</div>
{% endblock %}