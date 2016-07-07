{% extends "Parts/Tmpl.php" %}

{% set title = 'Page not found :: 404 :: Theta Lab' %}
{% set description = '404' %}
{% set keywords = '404' %}

{% block content %}
<div id=preloader>
    <div id=status>&nbsp;</div>
</div>
<div id=home>
    <div id=logo-big>
        <img alt="Theta Lab Logo" src=/img/general/logo-top.png>
    </div>
    <div class=text-home>
        <h5>O_O</h5>
        <p>Wow! Unknown error happens. <a title="Home page" href="/">Go to home</a>.</p>
    </div>
</div>
{% endblock %}
