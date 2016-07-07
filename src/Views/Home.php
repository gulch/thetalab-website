{% extends "Parts/Tmpl.php" %}

{% set title = 'Theta Lab :: Web Dev, WPO, Web Performance' %}
{% set description = 'Web development and design. Performance Optimization of WEB resources. Technologies: HTML5, CSS3, PHP, MySQL, Redis, Nginx, MariaDB ...' %}
{% set keywords = 'development, html5, css3, jquery, php, mysql, cms, industrial solutions, adaptive interface, web performance optimization, photography, panorama, architecture, virtual tours, real estate' %}

{% block header %}
{% include "Parts/Header.php" %}
{% endblock %}

{% block content %}
<div id=services>
    <div class=container>
        <div class="sixteen columns">
            <h1>What we do</h1>
            <h5>We bring a personal and effective approach to every project</h5>
        </div>
        <div id=services-list>
            <div class="six columns"><h6><span>Development</span></h6>
                <ul>
                    <li class=checkmark-list><p>HTML5, CSS3, jQuery</p></li>
                    <li class=checkmark-list><p>PHP, MySQL</p></li>
                    <li class=checkmark-list><p>CMS</p></li>
                    <li class=checkmark-list><p>Responsive Web</p></li>
                    <li class=checkmark-list><p>Website performance optimization</p></li>
                </ul>
            </div>
            <div class="six columns"><h6><span>Photography</span></h6>
                <ul>
                    <li class=photo-list><p>Panoramas</p></li>
                    <li class=photo-list><p>Interior</p></li>
                    <li class=photo-list><p>Architecture</p></li>
                    <li class=photo-list><p>Virtual Tours</p></li>
                    <li class=photo-list><p>Real Estate</p></li>
                </ul>
            </div>
        </div>
        <div class=clear></div>
        <div class=line></div>
    </div>
</div>
<div id=works>
    <div class=container>
        <div class="sixteen columns">
            <h1>Our Works</h1>
            <h5>Our latest works</h5>
        </div>
    </div>

    <div class=container>
        <div class="three columns">
            <div class="client client10"></div>
        </div>
        <div class="nine columns">
            <div class=view-work>
                <a href="/funtime-2016">
                    <img src=/img/works/funtime-2016.png alt="Funtime Kiev. Redesigned">
                    <div class=mask-work></div>
                </a>
            </div>
        </div>
        <div class="four columns">
            <div class=info-works>
                <h6>Funtime Kiev. Redesigned</h6>
                <p>
                    <strong>Date:</strong>
                    <time datetime="2016-06-01">01.06.2016</time>
                </p>
                <a class=inner-button-works target=_blank href=https://funtime.kiev.ua>funtime.kiev.ua</a>
            </div>
        </div>
    </div>

    <div class=works-sec>
        <div class=container>
            <div class="three columns">
                <div class="client client9"></div>
            </div>
            <div class="nine columns">
                <div class=view-work>
                    <a href="/funtime">
                        <img src=/img/works/901.jpg alt="Funtime - usefully time!">
                        <div class=mask-work></div>
                    </a>
                </div>
            </div>
            <div class="four columns">
                <div class=info-works>
                    <h6>Funtime</h6>
                    <p>
                        <strong>Date:</strong>
                        <time datetime="2015-05-11">11.05.2015</time>
                    </p>
                    <a class=inner-button-works target=_blank href="https://funtime.kiev.ua">funtime.kiev.ua</a>
                </div>
            </div>
        </div>
    </div>


    <div class=container>
        <div class="three columns">
            <div class="client client8"></div>
        </div>
        <div class="nine columns">
            <div class=view-work>
                <a href="/gulch-in-ua">
                    <img src=/img/works/801.jpg alt="Gulch Blog - Personal Blog. Gulch.in.ua">
                    <div class=mask-work></div>
                </a>
            </div>
        </div>
        <div class="four columns">
            <div class=info-works>
                <h6>Gulch Blog. Redesigned</h6>
                <p>
                    <strong>Date:</strong>
                    <time datetime="2015-02-03">03.02.2015</time>
                </p>
                <a class=inner-button-works target=_blank href=https://gulch.in.ua>gulch.in.ua</a>
            </div>
        </div>
    </div>


    <div class=works-sec>
        <div class=container>
            <div class="three columns">
                <div class="client client7"></div>
            </div>
            <div class="nine columns">
                <div class=view-work>
                    <a href="/oha-oha">
                        <img src=/img/works/m701.jpg alt="Oha-Oha!">
                        <div class=mask-work></div>
                    </a>
                </div>
            </div>
            <div class="four columns">
                <div class=info-works>
                    <h6>Oha-Oha!</h6>
                    <p>
                        <strong>Date:</strong>
                        <time datetime="2014-07-25">25.07.2014</time>
                    </p>
                    <a class=inner-button-works target=_blank href="http://oha-oha.com.ua/">oha-oha.com.ua</a>
                </div>
            </div>
        </div>
    </div>


    <div class=container>
        <div class="three columns">
            <div class="client client6"></div>
        </div>
        <div class="nine columns">
            <div class=view-work>
                <a href="/gulch-blog">
                    <img src=/img/works/m601.jpg alt="Personal Blog Gulch.tk">
                    <div class=mask-work></div>
                </a>
            </div>
        </div>
        <div class="four columns">
            <div class=info-works>
                <h6>Gulch Blog</h6>
                <p>
                    <strong>Date:</strong>
                    <time datetime="2014-01-03">01.03.2014</time>
                </p>
                <a class=inner-button-works target=_blank href=https://gulch.in.ua>gulch.in.ua</a>
            </div>
        </div>
    </div>


    <div class=works-sec>
        <div class=container>
            <div class="three columns">
                <div class="client client5"></div>
            </div>
            <div class="nine columns">
                <div class=view-work>
                    <a href="/sphered-project">
                        <img src=/img/works/m501.jpg alt="new website for Sphered.com.ua">
                        <div class=mask-work></div>
                    </a>
                </div>
            </div>
            <div class="four columns">
                <div class=info-works>
                    <h6>SPHERED</h6>
                    <p>
                        <strong>Date:</strong>
                        <time datetime="2014-02-25">25.02.2014</time>
                    </p>
                    <a class=inner-button-works target=_blank href="http://sphered.com.ua/">sphered.com.ua</a>
                </div>
            </div>
        </div>
    </div>
    <div class=container>
        <div class="three columns">
            <div class="client client4"></div>
        </div>
        <div class="nine columns">
            <div class=view-work>
                <a href="/mono-pano2vr">
                    <img src=/img/works/m401.jpg alt="Mono Virtual Tour Panel">
                    <div class=mask-work></div>
                </a>
            </div>
        </div>
        <div class="four columns">
            <div class=info-works>
                <h6>MONO Panel</h6>
                <p>
                    <strong>Date:</strong>
                    <time datetime="2013-12-09">09.12.2013</time>
                </p>
                <a class=inner-button-works target=_blank href="https://github.com/gulch/mono-pano2vr-skin">github</a>
            </div>
        </div>
    </div>
    <div class=works-sec>
        <div class=container>
            <div class="three columns">
                <div class="client client3"></div>
            </div>
            <div class="nine columns">
                <div class=view-work>
                    <a href="/sphered">
                        <img src=/img/works/m101.jpg alt="Virtual tours, panoramas - sphered.com.ua">
                        <div class=mask-work></div>
                    </a>
                </div>
            </div>
            <div class="four columns">
                <div class=info-works>
                    <h6>SPHERED</h6>
                    <p>
                        <strong>Date:</strong>
                        <time datetime="2013-12-26">26.12.2013</time>
                    </p>
                    <a class=inner-button-works target=_blank href="http://sphered.com.ua/">sphered.com.ua</a>
                </div>
            </div>
        </div>
    </div>
    <div class=container>
        <div class="three columns">
            <div class="client client2"></div>
        </div>
        <div class="nine columns">
            <div class=view-work>
                <a href="sphered-blog">
                    <img src=/img/works/m201.jpg alt="Blog for Sphered project">
                    <div class=mask-work></div>
                </a>
            </div>
        </div>
        <div class="four columns">
            <div class=info-works>
                <h6>SPHERED Blog</h6>
                <p>
                    <strong>Date:</strong>
                    <time datetime="2013-04-14">14.04.2013</time>
                </p>
                <a class=inner-button-works target=_blank href="http://blog.sphered.com.ua/">blog.sphered.com.ua</a>
            </div>
        </div>
    </div>
    <div class=works-sec>
        <div class=container>
            <div class="three columns">
                <div class="client client1"></div>
            </div>
            <div class="nine columns">
                <div class=view-work>
                    <a href="/novy-format">
                        <img src=/img/works/m301.jpg alt="Website for company Новый формат">
                        <div class=mask-work></div>
                    </a>
                </div>
            </div>
            <div class="four columns">
                <div class=info-works>
                    <h6>NFK.IN.UA</h6>
                    <p>
                        <strong>Date:</strong>
                        <time datetime="2013-03-27">27.03.2013</time>
                    </p>
                    <a class=inner-button-works target=_blank href="http://nfk.in.ua/">nfk.in.ua</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id=contact>
    <div class=container>
        <div class="sixteen columns">
            <h1>Contact Us</h1>
            <h5>Easy way to contact us</h5>
        </div>
        <div class="one-third column">
            <div class=text-and-icon>
                <img class=contact-image height=32 width=32 src="{{ 'img/general/email.png'|baseuri }}" alt="Email">
                <span>
                    <a href="mailto:contact@thetalab.tk">
                        <span>contact@thetalab.tk</span>
                    </a>
                </span>
            </div>
        </div>
        <div class="one-third column">
            <div class=text-and-icon>
                <img class=contact-image height=32 width=32 src="{{ 'img/general/world.png'|baseuri }}" alt="Address">
                <span>Kyiv, Ukraine</span>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
{% include "Parts/Footer.php" %}
{% endblock %}
