{% extends 'layout/default-header.php' %}

{% set background = 'bg_mask.png' %}
{% set title_left = 'Yann GUINEAU' %}
{% set title_right = 'Concepteur & Développeur Logiciel' %}
{% set pagename = 'cv' %}

{% block content %}
<div class="container cv">
    <div class="cv-left">
        <h2><i class="fa fa-flask"></i> Expériences Professionnelles</h2>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i><br />
                Septembre 2014<br />
                Maintenant
            </div>
            <div class="cv-detail">
                <h4>
                    Concepteur &amp; Développeur Logiciel
                    <br />
                    <small><i class="fa fa-map-marker"></i> BULL Amesys RSS, Airbus Helicopters, Marignane, France</small>
                </h4>
                <p>Prochainement</p>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i><br />
                Juin 2013<br />
                Juillet 2013
            </div>
            <div class="cv-detail">
                <h4>
                    Développeur Web
                    <br />
                    <small><i class="fa fa-map-marker"></i> Cristeal, Aix en Provence, France</small>
                </h4>
                <ul>
                    <li>Création d’un extranet à destination des techniciens pour la gestion des parcs informatiques des clients</li>
                    <li>Mise à jour et maintien du réseau informatique de l’entreprise</li>
                </ul>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i>
                Mars 2012
            </div>
            <div class="cv-detail">
                <h4>
                    Administrateur Systèmes
                    <br />
                    <small><i class="fa fa-map-marker"></i> Euriware, Marseille, France</small>
                </h4>
                <ul>
                    <li>Maintenance du parc informatique de tous les bâtiments du conseil régional des Bouches du Rhône</li>
                    <li>Administration de serveurs de virtualisation Citrix</li>
                </ul>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i>
                Janvier 2012
            </div>
            <div class="cv-detail">
                <h4>
                    Administrateur Systèmes
                    <br />
                    <small><i class="fa fa-map-marker"></i> Centre Hospitalier, Manosque, France</small>
                </h4>
                <ul>
                    <li>Administration et maintenance de l’infrastructure réseau du centre hospitalier de Manosque</li>
                    <li>Administration de serveurs de virtualisation VMware</li>
                    <li>Approfondissement de l’utilisation de serveurs Windows et Linux</li>
                </ul>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i>
                Mars 2011
            </div>
            <div class="cv-detail">
                <h4>
                    Technicien Informatique
                    <br />
                    <small><i class="fa fa-map-marker"></i> GRCS, Marseille, France</small>
                </h4>
                <ul>
                    <li>Maintenance du parc informatique d’une dizaine d’entreprises</li>
                    <li>Administration de serveurs Windows</li>
                </ul>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i>
                Janvier 2011
            </div>
            <div class="cv-detail">
                <h4>
                    Technicien Télécom
                    <br />
                    <small><i class="fa fa-map-marker"></i> France Télécom, Manosque, France</small>
                </h4>
                <ul>
                    <li>Découverte des réseaux téléphoniques de France Télécom</li>
                    <li>Maintenance des Noeuds de Raccordement des Abonnés (NRA)</li>
                </ul>
            </div>
        </div>

        <br />

        <h2><i class="fa fa-graduation-cap"></i> Diplômes &amp; Etudes</h2>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i> 2014
            </div>
            <div class="cv-detail">
                <h4>
                    Expert Informatique et Systèmes d’Information
                    <br />
                    <small><i class="fa fa-map-marker"></i> IngéSup, Option SIGL, Aix en Provence, France</small>
                </h4>
                <p></p>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i> 2012 - 2014
            </div>
            <div class="cv-detail">
                <h4>
                    BTS IRIS Programmation Industrielle
                    <br />
                    <small><i class="fa fa-map-marker"></i> Lycée Vauvenargues, Aix en Provence, France</small>
                </h4>
                <p></p>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date big">
                <i class="fa fa-calendar"></i> 2009 - 2012
            </div>
            <div class="cv-detail">
                <h4>
                    BAC Pro SEN Télécommunications Réseaux
                    <br />
                    <small><i class="fa fa-map-marker"></i> Lycée Ampère, Marseille, France</small>
                </h4>
                <p></p>
            </div>
        </div>

        <br />

        <h2><i class="fa fa-star-o"></i> Certifications</h2>

        <div class="cv-container">
            <div class="cv-date">
                <i class="fa fa-calendar"></i> 2014
            </div>
            <div class="cv-detail">
                <p><img src="images/medal_gold.png" />&nbsp; WorldSkills PACA - SysAdmin : Or</p>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date">
                <i class="fa fa-calendar"></i> 2012
            </div>
            <div class="cv-detail">
                <p><img src="images/medal_silver.png" />&nbsp; WorldSkills PACA - SysAdmin : Argent</p>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date">
                <i class="fa fa-calendar"></i> 2013
            </div>
            <div class="cv-detail">
                <p>Zend Certified PHP Engineer</p>
            </div>
        </div>

        <div class="cv-container">
            <div class="cv-date">
                <i class="fa fa-calendar"></i> 2012
            </div>
            <div class="cv-detail">
                <p>Cisco Certified Network Associate</p>
            </div>
        </div>
    </div>
    <div class="cv-right">
        <h2><i class="fa fa-cogs"></i> Compétences</h2>

        <h3><i class="fa fa-code"></i> Programmation</h3>
        <div class="cv-line">
            <div class="columns">C/C++</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">STL</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Qt</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">boost</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <br />

        <div class="cv-line">
            <div class="columns">Scripts</div>
            <div class="columns">&nbsp;</div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Lua</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Perl</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Python</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Ruby</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <br />

        <div class="cv-line">
            <div class="columns">ActionScript 3</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line">
            <div class="columns">Assembleur</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line">
            <div class="columns">D Lang</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>

        <br />

        <h3><i class="fa fa-database"></i> SysAdmin</h3>
        <div class="cv-line">
            <div class="columns">Systèmes</div>
            <div class="columns">&nbsp;</div>
        </div>
        <div class="cv-line sub">
            <div class="columns">GNU/Linux</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Windows</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Mac OS X</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <br />

        <div class="cv-line">
            <div class="columns">Réseaux</div>
            <div class="columns">&nbsp;</div>
        </div>
        <div class="cv-line sub">
            <div class="columns">TPC/IP</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Cisco</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <br />

        <div class="cv-line">
            <div class="columns">Base de données</div>
            <div class="columns">&nbsp;</div>
        </div>
        <div class="cv-line sub">
            <div class="columns">MySQL <sub> &amp; MariaDB</sub></div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">PostgreSQL</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">NoSQL</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>

        <br />

        <div class="cv-line">
            <div class="columns">Virtualisation</div>
            <div class="columns">&nbsp;</div>
        </div>
        <div class="cv-line sub">
            <div class="columns">VMware</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">Citrix</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line sub">
            <div class="columns">KVM / QEMU</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>

        <br />

        <h3><i class="fa fa-html5"></i> Web</h3>
        <div class="cv-line">
            <div class="columns">HTML</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
            </div>
        </div>
        <div class="cv-line">
            <div class="columns">CSS</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line">
            <div class="columns">PHP</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
            </div>
        </div>
        <div class="cv-line">
            <div class="columns">JavaScript</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line">
            <div class="columns">jQuery</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>
        <div class="cv-line">
            <div class="columns">NodeJS</div>
            <div class="columns">
                <i class="fa fa-square"></i>
                <i class="fa fa-square"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
                <i class="fa fa-square-o"></i>
            </div>
        </div>

        <br />

        <h3><i class="fa fa-language"></i> Langues</h3>
        <div class="cv-line">
            <div class="columns">Français</div>
            <div class="columns">Courant</div>
        </div>
        <div class="cv-line">
            <div class="columns">Anglais</div>
            <div class="columns">Technique</div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".dynamic-color").css({
        "background-color": "{{ color1 }}",
        "background": "-webkit-linear-gradient(90deg, {{ color1 }} 10%, {{ color2 }} 90%)",
        "background": "   -moz-linear-gradient(90deg, {{ color1 }} 10%, {{ color2 }} 90%)",
        "background": "    -ms-linear-gradient(90deg, {{ color1 }} 10%, {{ color2 }} 90%)",
        "background": "     -o-linear-gradient(90deg, {{ color1 }} 10%, {{ color2 }} 90%)",
        "background": "        linear-gradient(90deg, {{ color1 }} 10%, {{ color2 }} 90%)"
    });
});
</script>
{% endblock %}
