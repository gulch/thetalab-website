{% extends "Parts/Tmpl.php" %}

{% set title = 'Funtime - usefully time! :: Theta Lab' %}
{% set description = 'Funtime - usefully time!. Full development service packet. Branding. SEO optimization. Blogging Support' %}
{% set keywords = 'funtime, kyiv, time, community, seo, advertisement' %}


{% block content %}
<nav id=navigation class="project-nav"><a href="/"><img class=logo alt=logo src=/img/general/logo.png></a></nav>
<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo><img src=imagez/clients/9.png></div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/img/works/902.jpg alt="Funtime website"></li>
                    <li><img src=/img/works/903.jpg alt="Funtime site logic development"></li>
                    <li><img src=/img/works/904.jpg alt="Funtime site dev"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns"><h6>Funtime - usefully time!</h6>
            <p>Full development service packet. Branding. SEO optimization. Blogging Support. Web performance optimization.</p>
            <p><a class=inner-button-works target=_blank href="https://funtime.kiev.ua">View</a></p>
        </div>
        <div id=services-list>
            <div class="four columns">
                <ul>
                    <li class=arrow-list><p>Web Performance Optimization</p></li>
                    <li class=arrow-list><p>Web Design</p></li>
                    <li class=arrow-list><p>User Interface Design</p></li>
                    <li class=arrow-list><p>Mobile Design</p></li>
                    <li class=arrow-list><p>Branding / Identity</p></li>
                    <li class=arrow-list><p>Advertising</p></li>
                    <li class=arrow-list><p>SEO</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
{% include "Parts/Footer.php" %}
{% endblock %}