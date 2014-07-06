{% extends 'layout/default-header.php' %}

{% set background = 'bg_blog.png' %}
{% set title_left = p.title %}
{% set subtitle = 'Par <a>Yann</a> le ' ~ p.date|date("j F Y") %}
{% set title = p.title %}
{% set header_size = 'medium' %}

{% block content %}
<div class="container">
    <div class="post">
        {{ p.content|raw}}
        <br />
    </div>
</div>

<div class="comments-header">
    <div class="container">
        <h2>Commentaires</h2>
    </div>
</div>

<div class="container">
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