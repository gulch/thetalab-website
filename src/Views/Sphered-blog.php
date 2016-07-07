{% extends "Parts/Tmpl.php" %}

{% set title = 'SPHER3D BLOG - blog about panoramic photography :: Theta Lab' %}
{% set description = 'SPHER3D BLOG - blog about panoramic photography. Full development service packet. Branding. SEO optimization. Blogging Support' %}
{% set keywords = 'web design, user interface design, branding, identity, advertising, panoramas, virtual tours, support, seo' %}


{% block content %}

{% include "Parts/ProjectNav.php" %}

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo><img src=/img/clients/2.png></div>
            <div id=cbp-fwslider class=cbp-fwslider>
                <ul>
                    <li><img src=/img/works/201.jpg alt="SPHER3D Blog site development"></li>
                    <li><img src=/img/works/202.jpg alt="SPHER3D Blog site logic development"></li>
                </ul>
            </div>
        </div>
        <div class="twelve columns">
            <h6>SPHER3D BLOG - blog about panoramic photography</h6>
            <p>Full development service packet. Branding. SEO optimization. Blogging Support</p>
            <p><a class=inner-button-works target=_blank href="http://blog.sphered.com.ua/">View</a></p>
        </div>
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