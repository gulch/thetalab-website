{% extends "Parts/Tmpl.php" %}

{% set title = 'MONO - skin for Pano2VR :: Theta Lab' %}
{% set description = 'MONO - skin for Pano2VR. Development Control Panel virtual tour or 3D view. Modern adaptive design. Made for Sphered Project.' %}
{% set keywords = 'web design, ui, ux, user interface design, mobile design, branding, panoramas, virtual tours' %}


{% block content %}

{% include "Parts/ProjectNav.php" %}

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo><img src=/img/clients/4.png></div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/img/works/401.jpg alt="Mono panel development"></li>
                    <li><img src=/img/works/402.jpg alt="Mono panel design"></li>
                    <li><img src=/img/works/403.jpg alt="Mono panel for panoramas"></li>
                    <li><img src=/img/works/404.jpg alt="Mono panel for virtual tours"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns">
            <h6>MONO - skin for Pano2VR</h6>
            <p>Development Control Panel virtual tour or 3D view. Modern adaptive design. Made for Sphered Project.</p>
            <p><a class=inner-button-works target=_blank href=http://sphered.com.ua/gallery>View</a></p>
        </div>
        <div id=services-list>
            <div class="four columns">
                <ul>
                    <li class=arrow-list><p>Design</p></li>
                    <li class=arrow-list><p>UI Design</p></li>
                    <li class=arrow-list><p>UX</p></li>
                    <li class=arrow-list><p>Programming</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
{% include "Parts/Footer.php" %}
{% endblock %}