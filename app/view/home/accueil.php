{% extends 'layout/default.php' %}

{% set background = 'bg_fade.png' %}
{% set title_left = 'Bienvenue visiteur !' %}

{% block content %}
<div class="container">
    <div class="post">
        <h2>A propos de moi</h2>
        <br />
        <p>Je suis Yann (<b>Luax</b>) Guineau, un jeune passioné par l'informatique et la programmation indistriel depuis plusieurs années.</p>

        <p>Je suis ce que l'on peu appler un <i>software developper</i>, spécialisé dans les systèmes embarqué et les programmation <i>backend</i> telle que des serveurs de jeu. Je pratique également du <i>reverse engineering</i> pour mieux comprendre le fonctionnement des protections et des logiciels malveillant.</p>

        <p>Et pour terminé, durant mon temps libre je fait un peut d'administration réseau et du développement web.</p>

        <br />

        <blockquote style="padding-left: 4em;">
            <p><i>"Software is like sex: it's better when it's free."<br />- Linus Torvalds</i></p>
        </blockquote>

        <br />

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
            <span class="s4">weboscket</span>
            <span class="s4">win32</span>
            <span class="s4">xml</span>
        </p>
        <br />
    </div>
</div>
{% endblock %}