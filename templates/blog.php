<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Blog | <?php echo $defaultTitle; ?></title>
        <meta name="description" content="FLUG blog. <?php echo $defaultDescription; ?>">

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
        <meta property="og:title" content="Blog | <?php echo $defaultTitle; ?>">
        <meta property="og:description" content="FLUG blog. <?php echo $defaultDescription; ?>">
        <meta property="og:url" content="<?php echo $domaine; ?>/">
        <meta property="og:site_name" content="FLUG">
        <meta property="og:image" content="<?php echo $domaine; ?>/assets/social_media.jpg">
        <meta property="og:image:width" content="400">
        <meta property="og:image:height" content="400">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Blog | <?php echo $defaultTitle; ?>">
        <meta name="twitter:description" content="FLUG blog. <?php echo $defaultDescription; ?>">
        <meta name="twitter:image" content="<?php echo $domaine; ?>/assets/social_media.jpg">

        <!-- Icons -->
        <meta name="msapplication-TileImage" content="<?php echo $domaine; ?>/assets/favicon_270x270.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo $domaine; ?>/assets/favicon_180x180.png" />
        <link rel="icon" href="<?php echo $domaine; ?>/assets/favicon_32x32.png" sizes="32x32" />
        <link rel="icon" href="<?php echo $domaine; ?>/assets/favicon_192x192.png" sizes="192x192" />

        <!-- Style -->
        <link href="https://fonts.googleapis.com/css?family=Mandali|Ubuntu:300|Oxygen+Mono|Ubuntu+Mono" rel="stylesheet" type="text/css">
        <link href="/styles/main.css" media="all" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="/styles/highlightjs/github.css" type="text/css"/>
        <link rel="stylesheet" href="/styles/asciidoc/default.css" type="text/css"/>
    </head>
    <body>
<?php
$articles = $blog->getArticles();
?>
        <header id="header-area">
            <div id="header-container">
                <h1>
                    <a href="/" class="home-link">flug.dk</a>
                </h1>
                <nav id="navigation">
                    <?php echo $searchField; ?>
                    <a href="/blog">Blog</a>
                    <a href="/#2" class="event-link">Events</a>
                    <a href="/#3" class="who-link">Hvem er flug?</a>
                </nav>
            </div>
        </header>
        <div id="blog-contents">
            <div id="blog-container">
                <div id="spacer"></div>
                <?php 
                if ($articles != null) {
                foreach ($articles->asciidoc as $article) { 
                    $date = new DateTime($article->created);
                    $created = $date->format('Y-m-d H:i:s');
                    $doc = $blog->getArticle($article->title);
                ?>
                <div class="box">
                    <div class="post">
                        <a href="#" title="#">
                            <img class="thumbnail alignleft" src="assets/default_thumb.png" alt="#"/>
                        </a>
                        <div class="text">
                            <p class="meta">
                                <span class="cat">
                                    <?php 
                                    $numCat = count($article->categories);
                                    $i = 1;
                                    foreach ($article->categories as $cat) {
                                    ?>
                                    <a title="" href="#"><?php echo $cat->name; ?></a>
                                    <?php 
                                        if ($i < $numCat) {
                                    ?>
                                     / 
                                    <?php
                                        }
                                        $i++;
                                    } 
                                    ?>
                                </span>
                            </p>
                            <h2>
                                <a href="#" title="#"><?php echo $article->title; ?></a>
                            </h2>
                            <p class="meta-post">
                                Jimmi Kristensen 
                                <?php echo $created; ?>
                            </p>
                            <div class="entry">
                                <?php echo $doc; ?>
                                <p>Patience is one tough lady: after 13 years in development, free 2D vector-based animation application Synfig Studio finally gets the golden badge of v1.0, delivering a sleigh of improvements and new features.</p>
                                <div class="box-end"></div>
                                <span class="read-more">
                                    <a class="link-btn1" href="/blog/<?php echo $article->title; ?>">Vis mere</a>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php 
                }
                }
                ?>
            </div>
            <div class="blogspacer"></div>
            <footer id="footer">
                <div id="footer-container">
                    <div id="footer-nav">
                        <h4>Navigation</h4>
                        <ul id="site-links" class="list-line">
                            <li><a class="home-link" href="/">flug.dk</a></li>
                            <li>/</li>
                            <li><a href="/blog">Blog</a></li>
                            <li>/</li>
                            <li><a class="event-link" href="/#2">Events</a></li>
                            <li>/</li>
                            <li><a class="who-link" href="/#3">Hvem er flug?</a></li>
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
        </div>
        <script src="/js/jquery-1.11.3.min.js"></script>
        <script src="/js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <script src="/js/common.js"></script>
    </body>
</html>