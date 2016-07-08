{% extends "Parts/Tmpl.php" %}

{% set title = 'Sphered project :: Theta Lab' %}
{% set description = 'Sphered project. New modern website for Sphered project. Full development service packet. Branding. SEO optimization. 3D Photo Services' %}
{% set keywords = 'web design, user interface design, mobile design, branding, identity, advertising, panoramas, virtual tours, support' %}


{% block content %}

{% include "Parts/ProjectNav.php" %}

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo>
                <img src=/img/clients/5.png>
            </div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/img/works/501.jpg alt="Sphered site development"></li>
                    <li><img src=/img/works/502.jpg alt="Sphered logic development"></li>
                    <li><img src=/img/works/503.jpg alt="Sphered design"></li>
                    <li><img src=/img/works/504.jpg alt=Sphered></li>
                    <li><img src=/img/works/505.jpg alt="Sphered seo"></li>
                    <li><img src=/img/works/506.jpg alt="Sphered VR"></li>
                    <li><img src=/img/works/507.jpg alt="Sphered blog"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns">
            <h6>Sphered project</h6>
            <p>New modern website for Sphered project. Full development service packet. Branding. SEO optimization. 3D Photo Services</p>
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
                    <li class=arrow-list><p>Support</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
{% include "Parts/Footer.php" %}
{% endblock %}