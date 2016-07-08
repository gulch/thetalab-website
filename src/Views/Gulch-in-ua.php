{% extends "Parts/Tmpl.php" %}

{% set title = 'Gulch Blog. Redesigned - personal blog :: Theta Lab' %}
{% set description = 'Gulch Blog - web developer\'s personal blog. Full development service packet. Branding. SEO optimization. Web Performance Optimization. Blogging Support' %}
{% set keywords = 'web design, wpo, user interface design, mobile design, branding, identity, seo' %}

{% block content %}

{% include "Parts/ProjectNav.php" %}

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo><img src=/img/clients/8.png></div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/img/works/802.jpg alt="Gulch Blog gulch.in.ua"></li>
                    <li><img src=/img/works/803.jpg alt="Gulch Blog on Mobile Phone"></li>
                    <li><img src=/img/works/804.jpg alt="Gulch Blog Mobile"></li>
                    <li><img src=/img/works/805.png alt="Gulch Blog Responsive"></li>
                    <li><img src=/img/works/806.png alt="Gulch Blog Publication View"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns"><h6>Gulch Blog. Redesigned - personal blog of web developer</h6>

            <p>New Minimalistic and Clear Responsive Design. Web Performance Optimization. Full development service package. Branding. SEO optimization. Blogging Support</p>

            <p>
                <a class=inner-button-works target=_blank href="https://gulch.in.ua">View</a>
            </p>
        </div>
        <div id=services-list>
            <div class="four columns">
                <ul>
                    <li class=arrow-list><p>Web Performance optimization</p></li>
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