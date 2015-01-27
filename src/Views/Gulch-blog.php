{% extends "Parts/Tmpl.php" %}

{% set title = 'Gulch Blog - web developer\'s personal blog :: Theta Lab' %}
{% set description = 'Gulch Blog - web developer\'s personal blog. Full development service packet. Branding. SEO optimization. Blogging Support' %}
{% set keywords = 'web design, user interface design, mobile design, branding, identity, advertising, seo' %}


{% block content %}
<nav id=navigation class="project-nav"><a href="/"><img class=logo alt=logo src=/imagez/logo.png></a></nav>

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo><img src=/imagez/clients/6.png></div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/imagez/works/601.jpg alt="Gulch Blog site development"></li>
                    <li><img src=/imagez/works/602.jpg alt="Gulch Blog site logic development"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns"><h6>Gulch Blog - web developer's personal blog</h6>

            <p>Full development service packet. Branding. SEO optimization. Blogging Support</p>

            <p><a class=inner-button-works target=_blank href="http://gulch.in.ua/">View</a></p></div>
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