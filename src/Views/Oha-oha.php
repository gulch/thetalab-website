{% extends "Parts/Tmpl.php" %}

{% set title = 'Oha-Oha! - open people community :: Theta Lab' %}
{% set description = 'Oha-Oha! - open people community. Full development service packet. Branding. SEO optimization. Blogging Support' %}
{% set keywords = 'Oha Oha, open people, community, seo, advertisement' %}


{% block content %}
<nav id=navigation class="project-nav"><a href="/"><img class=logo alt=logo src=/imagez/logo.png></a></nav>
<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo><img src=imagez/clients/7.png></div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/imagez/works/701.jpg alt="Oha oha website"></li>
                    <li><img src=/imagez/works/702.jpg alt="Oha-Oha site logic development"></li>
                    <li><img src=/imagez/works/703.jpg alt="Oha-Oha site dev"></li>
                    <li><img src=/imagez/works/704.jpg alt=oha-oha.com.ua></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns"><h6>Oha-Oha! - open people community</h6>

            <p>Full development service packet. Branding. SEO optimization. Blogging Support</p>

            <p><a class=inner-button-works target=_blank href="http://oha-oha.com.ua/">View</a></p></div>
        <div id=services-list>
            <div class="four columns">
                <ul>
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