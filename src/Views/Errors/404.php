{% extends "Parts/Tmpl.php" %}

{% set title = 'Page not found :: 404 :: Theta Lab' %}
{% set description = '404' %}
{% set keywords = '404' %}

{% block content %}
<div id=preloader>
    <div id=status>&nbsp;</div>
</div>
<div id=home>
    <div id=logo-big><img alt="Theta Lab Logo" src=imagez/logo-top.png></div>
    <div class=text-home>
        <h5>404</h5>
        <p>That page doesn't exists! <a title="Home page" href="/">Go to home</a>.</p>
    </div>
</div>
{% endblock %}