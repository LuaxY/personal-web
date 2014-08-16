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
            <span class="s4">apache</span>
            <span class="s3">assembler</span>
            <span class="s4">boost</span>
            <span class="s7">C/C++</span>
            <span class="s6">cisco</span>
            <span class="s4">css3</span>
            <span class="s5">git</span>
            <span class="s5">html5</span>
            <span class="s5">javascript</span>
            <span class="s3">jquery</span>
            <span class="s7">linux</span>
            <span class="s2">lua</span>
            <span class="s3">mongoDB</span>
            <span class="s5">mysql</span>
            <span class="s2">nginx</span>
            <span class="s3">NoSQL</span>
            <span class="s7">opensource</span>
            <span class="s6">php</span>
            <span class="s4">postgresql</span>
            <span class="s3">proxmox</span>
            <span class="s2">python</span>
            <span class="s6">Qt</span>
            <span class="s3">redis</span>
            <span class="s3">reverse engineering</span>
            <span class="s4">sfml</span>
            <span class="s5">shell</span>
            <span class="s6">stl</span>
            <span class="s2">symfony 2</span>
            <span class="s7">tcp/ip</span>
            <span class="s6">unix</span>
            <span class="s5">virtualization</span>
            <span class="s4">websocket</span>
            <span class="s4">win32</span>
            <span class="s4">xml</span>
        </p>
        <br />
    </div>
</div>
{% endblock %}
