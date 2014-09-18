{% extends 'layout/' ~ template ~ '.php' %}

{% block page %}
<div class="black-container">
    <div {% if gradient is defined %}id="gradient"{% endif %} class="dynamic-color">
        <div class="header-wrapper{% if header_size is defined %} header-{{ header_size }}{% endif %}"{% if background is defined %} style="background-image:url('{{ asset('images/back/' ~ background) }}')"{% endif %}>
            <div class="container">
                {% if title_right is defined %}<h1 class="header-title pull-right">{{ title_right }}</h1>{% endif %}
                {% if title_left is defined %}<h1 class="header-title">{{ title_left }}</h1>{% endif %}
                {% if subtitle is defined %}<h1 class="header-subtitle">{{ subtitle|raw }}</h1>{% endif %}
            </div>
        </div>
    </div>
</div>
<?php echo $this->Session->flash(); ?>
{{ block('content') }}
{% endblock %}