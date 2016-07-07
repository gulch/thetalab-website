{% extends "Parts/Tmpl.php" %}

{% set title = 'Funtime Redesigned 2016 :: Theta Lab' %}
{% set description = 'Funtime Kiev project. New modern website for Funtime project. Full development service packet. Branding. SEO optimization. Branding' %}
{% set keywords = 'web design, user interface design, mobile design, branding, identity, advertising, support, ux, ui, marketing strategies' %}


{% block content %}

{% include "Parts/ProjectNav.php" %}

<div id=work>
    <div class=container>
        <div class="sixteen columns">
            <div class=project-logo>
                <img src=/img/clients/10.png>
            </div>
        </div>
    </div>

    <img class="w100p" src="/img/works/funtime-2016/funtime-background.jpg" alt="Funtime Kiev Background Image">

    <div class=container>
        <div class="twelve columns">
            <h6>Funtime Kiev. Redesigned</h6>
            <p>New modern website for Funtime project. Full stack web development. Design. Branding. SEO optimization. Marketing and Advertisement.</p>
            <p><a class=inner-button-works target=_blank href="https://funtime.kiev.ua">View website</a></p>
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
                    <li class=arrow-list><p>SMM</p></li>
                    <li class=arrow-list><p>Support</p></li>
                </ul>
            </div>
        </div>

        <div class="sixteen columns">
            <h4>Locations</h4>
            <p>
                Location is a wonderfull place where you can spend time usefully!
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/location-page.jpg" alt="location page">
            </div>
            <p>
                You can "checkin" on location - save to your "planning" or "visited" places list.
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/checkin-block.png" alt="checkin on location">
            </div>
            <p>
                You can build route to the location via Google Map API integration feature.
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/build-route.jpg" alt="checkin on location">
            </div>
            <p>
                You also can view all locations of some category on the Google Map.
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/locations-map.jpg" alt="checkin on location">
            </div>
        </div>

        <div class="sixteen columns">
            <h4>Collections</h4>
            <p>
                Collection is a set of locations union by some common characteristic.
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/collections.png" alt="collections">
            </div>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/collection-page.png" alt="Collection Page">
            </div>
        </div>

        <div class="sixteen columns">
            <h4>Social Media Integration</h4>
            <p>
                Share to lot of social media
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/share-to-social-media-block.png" alt="Share to lot of social media">
            </div>

            <p>
                "Talk to friends" social share - create post to social media about you comment or checkin about visited location.
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/about-comment-share.png" alt="Talk to friends">
            </div>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/comment-modal.png" alt="Talk to friends. Modal">
            </div>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/success-modal.png" alt="Talk to friends. Success Modal">
            </div>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/vk-confirm.png" alt="Talk to friends. Vkontakte">
            </div>
        </div>

        <div class="sixteen columns">
            <h4>Image generation</h4>
            <p>
                Special script that generate images for share to social networks.
                There are different text templates for "events", "collections", "locations" or blog.
                And special #hashtag for each type of publication.
            </p>
            <div class="eight columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/hard-quest-room-list-collection-kiev.jpg" alt="Social image for collection">
            </div>
            <div class="eight columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/tomatina-kiev-2016-festival.jpg" alt="Social image for event">
            </div>
            <div class="eight columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/time-machine-escape-quest.jpg" alt="Social image for location">
            </div>
            <div class="eight columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/kuda-poexat-na-majskie-prazdniki.jpg" alt="Social image for blog">
            </div>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/fb-post.png" alt="FB Post Page">
            </div>
        </div>

        <div class="sixteen columns">
            <h4>Features for Administrators</h4>
            <p>
                Detailed statistic for every location
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/location-stat.png" alt="Detailed statistic for every location">
            </div>
            <p>
                Administrator Dashboard
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/admin-dashboard.png" alt="Administrator Dashboard">
            </div>
        </div>

        <div class="sixteen columns">
            <h4>API for developers</h4>
            <p>
                Website API for developers. It's a closed API, but you can get access key.
                Just send you request to Funtime team ;)
            </p>
            <div class="sixteen columns alpha omega">
                <img class="w100p" src="/img/works/funtime-2016/api.png" alt="Api">
            </div>
        </div>

    </div>
</div>
{% endblock %}

{% block footer %}
{% include "Parts/Footer.php" %}
{% endblock %}