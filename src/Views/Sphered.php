{% extends "Parts/Tmpl.php" %}

{% set title = 'SPHERED :: Theta Lab' %}
{% set description = 'SPHERED. Full development service packet. Branding. SEO optimization. 3D Photo Services' %}
{% set keywords = 'web design, user interface design, branding, identity, advertising, panoramas, virtual tours, support' %}


{% block content %}

{% include "Parts/ProjectNav.php" %}

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo>
                <img src=/img/clients/3.png>
            </div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/img/works/101.jpg alt="Sphered site development"></li>
                    <li><img src=/img/works/102.jpg alt="Sphered site logic development"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns">
            <h6>SPHERED</h6>
            <p>Full development service packet. Branding. SEO optimization. 3D Photo Services</p>
            <p><a class=inner-button-works target=_blank href="http://sphered.com.ua/">View</a></p>
        </div>
        <div id=services-list>
            <div class="four columns">
                <ul>
                    <li class=arrow-list><p>Web Design</p></li>
                    <li class=arrow-list><p>User Interface Design</p></li>
                    <li class=arrow-list><p>Mobile Design</p></li>
                    <li class=arrow-list><p>Branding / Identity</p></li>
                    <li class=arrow-list><p>Advertising</p></li>
                    <li class=arrow-list><p>Panoramas</p></li>
                    <li class=arrow-list><p>Virtual Tours</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
{% include "Parts/Footer.php" %}
{% endblock %}