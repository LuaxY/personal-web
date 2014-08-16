{% extends 'layout/default-header.php' %}

{% set background = 'bg_fade.png' %}
{% set title_left = 'Bienvenue visiteur !' %}

{% block content %}
<div class="container">
    <div class="post">
        <h2>À propos de moi</h2>
        <br />

        <p>Je suis Yann (<b>Luax</b>) Guineau, jeune passionné d'informatique et de programmation industrielle depuis plusieurs années.</p>
        <p>Je suis développeur logiciels, spécialisé dans les systèmes embarqués et les programmes <i>backend</i>, tels que des serveurs de jeux. Je pratique également du <i>reverse engineering</i> pour mieux comprendre le fonctionnement des protections et des logiciels malveillants.</p>
        <p>Et pour terminer, durant mon temps libre, je fais un peu d'administration réseaux et du développement web. J'utilise couramment les principaux systèmes d'exploitation Linux, Windows et Mac.</p>

        <br />

        <blockquote style="padding-left: 4em;">
            <p><i>"Software is like sex: it's better when it's free."<br />- Linus Torvalds</i></p>
        </blockquote>

        <div align="center">
            <a href="https://twitter.com/LuaxY_" target="_blank"><img src="{{ asset('images/soc-twi.png') }}"></a>
            <a href="https://github.com/LuaxY" target="_blank"><img src="{{ asset('images/soc-git.png') }}"></a>
            <a href="http://dev.voidmx.net" target="_blank"><img src="{{ asset('images/soc-gitlab.png') }}"></a>
            <a href="skype:yann.0x?add"><img src="{{ asset('images/soc-sky.png') }}"></a>
        </div>

        <h2>Nuage de compétences</h2>
        <br />
        <p class="tag_cloud">
            {% for skill, level in cloud %}
            <span class="s{{ level }}">{{ skill }}</span>
            {% endfor %}
        </p>
        <br />
    </div>
</div>
{% endblock %}
