<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php $defaultTitle ?></title>
        <meta name="description" content="<?php $defaultDescription ?>">

        <link rel="canonical" href="<?php echo $domaine; ?>/">

        <!-- mobile layout -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#29ABE1">
        <meta name="msapplication-navbutton-color" content="#29ABE1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Social media -->
        <meta property="og:locale" content="da_DK">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php $defaultTitle ?>">
        <meta property="og:description" content="<?php $defaultDescription ?>">
        <meta property="og:url" content="<?php echo $domaine; ?>/">
        <meta property="og:site_name" content="FLUG">
        <meta property="og:image" content="<?php echo $domaine; ?>/assets/social_media.jpg">
        <meta property="og:image:width" content="400">
        <meta property="og:image:height" content="400">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php $defaultTitle ?>">
        <meta name="twitter:description" content="<?php $defaultDescription ?>">
        <meta name="twitter:image" content="<?php echo $domaine; ?>/assets/social_media.jpg">

        <!-- Icons -->
        <meta name="msapplication-TileImage" content="<?php echo $domaine; ?>/assets/favicon_270x270.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo $domaine; ?>/assets/favicon_180x180.png" />
        <link rel="icon" href="<?php echo $domaine; ?>/assets/favicon_32x32.png" sizes="32x32" />
        <link rel="icon" href="<?php echo $domaine; ?>/assets/favicon_192x192.png" sizes="192x192" />

        <!-- Style -->
        <link href="https://fonts.googleapis.com/css?family=Mandali|Ubuntu:300|Oxygen+Mono|Ubuntu+Mono" rel="stylesheet" type="text/css">
        <link href="/styles/main.css" media="all" type="text/css" rel="stylesheet"/>
        <link href="/styles/onepage-scroll.css" media="all" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <header id="header-area">
            <div id="header-container">
                <h1>
                    <a href="#2" class="home-link">flug.dk</a>
                </h1>
                
                <nav id="navigation">
                    <?php echo $searchField; ?>
                    <a href="/blog">Blog</a>
                    <a href="#2" class="event-link">Events</a>
                    <a href="#3" class="who-link">Hvem er flug?</a>
                </nav>
            </div>
        </header>
        <div id="main" id="main-contents">
            <section id="sec1">
                <div id="intro" class="section-contents">
                    <div id="flug-into">
                        <h2>Fyns Linux User Group</h2>
                        <p>
                            FLUG er en forening for dig med passion for Open Source. 
                            Kom med til et af FLUGs foredrag eller install parties. 
                            Alle er velkomne, og medlemsskabet er gratis og uforpligtende.
                        </p>
                        <div id="find-out-more">
                            <a href="#3" class="who-link">Vil du vide mere <span>?</span></a>
                        </div>
                    </div>
                    <img id="os-banner" src="/assets/flug3.png" alt="Open Source Community"/>
                </div>
                <div id="next-event-container" class="event-link"></div>
                <div id="intro-bottom">
                    <div id="social-media">
                        <p>
                            Er du interesseret i at komme til et af vores arrangementer, 
                            så se under <a class="event-link" href="#2">events</a>, eller find os på de 
                            sociale medier.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/groups/flug.dk" target="_blank">
                                <img src="/assets/fb_icon.png" alt="FB"/>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec2">
                <div id="calendar-container"></div>
            </section>
            <section id="sec3">
                <div id="who-container">
                    <h2>Om flug</h2>
                    <div id="about">
                        <p>
                            Fyns Linux User Group er en forening for dig med passion for Open Source. 
                            Kom med til et af FLUGs foredrag eller install parties. 
                            Alle er velkomne, og medlemsskabet er gratis og uforpligtende. 
                        </p>
                        <p>
                            FLUG holder møde ca. hver fjortende dag. Ved disse 
                            møder afholder vi foredrag om et Open Source relateret. 
                            Ca. en gang om måneden afholder vi desuden et install party på et aktuelt emne. 
                            Emnet til vores install party, kan være alt inden for Open Source, og afspringer 
                            ofte af et emne til et af vores foredrag, hvis vi ønsker at grave dybere ned i emnet.
                        </p>
                        <p>
                            FLUG startede i 1996 som en interessegruppe for studerende på Odense Universitet. 
                            I dag er FLUGs medlemmer en bred skare af alt fra postbude, gymnasieelever, deres 
                            lærere til professionelle systemadministratorer.
                        </p>
                        <p>
                            Er du interesseret i at komme til et af vores møder, så send en mail til <a href="mailto:flug-misc@flug.dk">flug-misc@flug.dk</a>.
                        </p>
                    </div>
                </div>
                <footer id="footer" class="footer-absolute">
                    <div id="footer-container">
                        <div id="footer-nav">
                            <h4>Navigation</h4>
                            <ul id="site-links" class="list-line">
                                <li><a class="home-link" href="#1">flug.dk</a></li>
                                <li>/</li>
                                <li><a href="/blog">Blog</a></li>
                                <li>/</li>
                                <li><a class="event-link" href="#2">Events</a></li>
                                <li>/</li>
                                <li><a class="who-link" href="#3">Hvem er flug?</a></li>
                                <li>/</li>
                                <li><a href="https://github.com/JoeX2/flug.dk" target="_blank">Bidrage</a></li>
                            </ul>
                        </div>
                        <div id="footer-findus">
                            <h4>Find os</h4>
                            <ul id="social-links" class="list-line">
                                <li>
                                    <a href="https://www.facebook.com/groups/flug.dk" target="_blank">
                                        <img height="30" src="/assets/fb_icon.png" alt="FB"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/groups/flug.dk" target="_blank">
                                        Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
        <script src="/js/jquery-1.11.3.min.js"></script>
        <script src="/js/jquery.linkify.min.js"></script>
        <script src="/js/jquery.onepage-scroll.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/common.js"></script>
        <script src="/js/calendar.js"></script>
    </body>
</html>