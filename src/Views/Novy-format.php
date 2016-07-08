{% extends "Parts/Tmpl.php" %}

{% set title = 'NFK.IN.UA - new modern site for company "Novy Format" :: Theta Lab' %}
{% set description = 'New modern site that represents about full range of services company "Noviy Format" located in Ukrane, Kiev, Zapadinskaya str., 5. Full development service packet. Branding. Photo.' %}
{% set keywords = 'web design, user interface design, branding, identity, advertising, support, seo' %}

{% block content %}

{% include "Parts/ProjectNav.php" %}

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo><img src=/img/clients/1.png></div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/img/works/301.jpg alt="Новый формат"></li>
                    <li><img src=/img/works/302.jpg alt="Новый формат"></li>
                    <li><img src=/img/works/303.jpg alt="Новый формат"></li>
                    <li><img src=/img/works/304.jpg alt="Новый формат"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns">
            <h6>NFK.IN.UA - new modern site for company "Novy Format"</h6>
            <p>New modern site that represents about full range of services company "Noviy Format"
                located in Ukraine, Kiev, Zapadinskaya street, 5.
                Full development service packet. Branding. Photo.
            </p>
            <p><a class=inner-button-works target=_blank href="http://nfk.in.ua/">View</a></p>
        </div>
        <div id=services-list>
            <div class="four columns">
                <ul>
                    <li class=arrow-list><p>Web Design</p></li>
                    <li class=arrow-list><p>User Interface Design</p></li>
                    <li class=arrow-list><p>Branding / Identity</p></li>
                    <li class=arrow-list><p>Advertising</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
{% include "Parts/Footer.php" %}
{% endblock %}