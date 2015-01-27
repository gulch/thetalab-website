<!DOCTYPE html>
<html class=no-js lang="en-US" itemscope itemtype="http://schema.org/WebSite">
<head prefix="og: http://ogp.me/ns#; dcterms: http://purl.org/dc/terms/#">
    <meta charset=utf-8>
    <title>{{ title }}</title>
    <meta name=description content="{{ description }}">
    <meta name="keywords" content="{{ keywords }}">
    <meta name=author content="Theta Lab">
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">

    <!-- Social: Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@thetalab">
    <meta name="twitter:creator" content="Theta Lab">
    <meta name="twitter:title" content="Theta Lab">
    <meta name="twitter:description" content="{{ description }}">
    <meta name="twitter:image:src" content="/imagez/thetalab-social-img-cover.jpg">

    <!-- Social: Facebook / Open Graph -->
    <meta property="og:url" content="http://thetalab.tk">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Theta Lab">
    <meta property="og:title" content="Theta Lab">
    <meta property="og:image" content="/imagez/thetalab-social-img-cover.jpg"/>
    <meta property="og:description" content="{{ description }}">
    <meta property="og:site_name" content="Theta Lab">
    <meta property="article:author" content="https://www.facebook.com/thetalab.tk">
    <meta property="article:publisher" content="https://www.facebook.com/thetalab.tk">

    <!-- Social: Google+ / Schema.org  -->
    <link rel="author" href="https://plus.google.com/100719557478579808883">
    <link rel="publisher" href="https://plus.google.com/100719557478579808883">
    <meta itemprop="name" content="Theta Lab">
    <meta itemprop="description" content="{{ description }}">
    <meta itemprop="image" content="/imagez/thetalab-social-img-cover.jpg">
    <meta itemprop="url" content="http://thetalab.tk">

    <meta property="dcterms:title" content="Theta Lab" />
    <meta property="dcterms:description" content="{{ description }}" />

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">

    <link rel="image_src" href="/imagez/thetalab-social-img-cover.jpg">

    <link rel=stylesheet href=css/style.css>
</head>
<body>
{% block header %}{% endblock %}
{% block content %}{% endblock %}
{% block footer %}{% endblock %}
<script type=text/javascript src="js/script.js"></script>
{% include "Parts/Counters.php" %}
</body>
</html>
