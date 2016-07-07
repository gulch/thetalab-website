<!DOCTYPE html>
<html class="no-js" lang="en-US" itemscope itemtype="http://schema.org/WebSite">
<head prefix="og: http://ogp.me/ns#; dcterms: http://purl.org/dc/terms/#">
    <meta charset="utf-8">
    <title>{{ title }}</title>
    <meta name="description" content="{{ description }}">
    <meta name="keywords" content="{{ keywords }}">
    <meta name="author" content="Theta Lab">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <!-- Social: Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@thetalab">
    <meta name="twitter:creator" content="Theta Lab">
    <meta name="twitter:title" content="Theta Lab">
    <meta name="twitter:description" content="{{ description }}">
    <meta name="twitter:image:src" content="/img/general/thetalab-social-img-cover.jpg">

    <!-- Social: Facebook / Open Graph -->
    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Theta Lab">
    <meta property="og:title" content="Theta Lab">
    <meta property="og:image" content="/img/general/thetalab-social-img-cover.jpg"/>
    <meta property="og:description" content="{{ description }}">
    <meta property="og:site_name" content="Theta Lab">
    <meta property="article:author" content="https://www.facebook.com/thetalab.tk">
    <meta property="article:publisher" content="https://www.facebook.com/thetalab.tk">

    <!-- Social: Google+ / Schema.org  -->
    <link rel="author" href="https://plus.google.com/100719557478579808883">
    <link rel="publisher" href="https://plus.google.com/100719557478579808883">
    <meta itemprop="name" content="Theta Lab">
    <meta itemprop="description" content="{{ description }}">
    <meta itemprop="image" content="/img/general/thetalab-social-img-cover.jpg">
    <meta itemprop="url" content="http://thetalab.tk">

    <meta property="dcterms:title" content="Theta Lab">
    <meta property="dcterms:description" content="{{ description }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="image_src" href="/img/general/thetalab-social-img-cover.jpg">

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    {% block header %}{% endblock %}
    {% block content %}{% endblock %}
    {% block footer %}{% endblock %}
    <script defer src="/js/script.js"></script>
    {% include "Parts/Counters.php" %}
</body>
</html>
