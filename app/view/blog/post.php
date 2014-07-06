{% extends 'layout/default.php' %}

{% set background = 'bg_blog.png' %}
{% set title_left = p.title %}
{% set title_right = 'Blog' %}
{% set title = p.title %}

{% block content %}
<div class="container">
    <div class="post">
        <p><img src="{{ asset('images/flags/' ~ p.lang ~ '.png') }}" class="icon" alt="{{ p.lang }}" /> <img src="{{ asset('images/flags/' ~ p.icon) }}" class="icon" alt="{{ p.name }}" /> <?php echo strtolower(date('l d F Y', strtotime("{{ p.date }}"))); ?></p>
        <h1>{{ p.title }}</h1>
        {{ p.content|raw}}
        <hr />
    </div>

    <div class="post">
        <div id="disqus_thread" style="padding: 10px;"></div>
        <script type="text/javascript">
        var disqus_shortname = 'yanncx';
        var disqus_identifier = '{{ p.title }}';
        var disqus_tile = '{{ p.title }}';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>

</div>
{% endblock %}