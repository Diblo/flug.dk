    <?php
require 'vendor/autoload.php';
require 'libs/Calendar.php';
require 'libs/Blog.php';

$DOMAINE = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http') . "://" . $_SERVER['HTTP_HOST'];
$TITLE = "Fyns Linux User Group (FLUG)";
$DESCRIPTION = "Fyns Linux User Group (FLUG) er en forening for dig med passion for Open Source.";

$app = new \Slim\Slim();
$app = new \Slim\Slim(array(
    'templates.path' => './templates',
    'debug' => true,
    'mode' => 'development'
));
$app->contentType('text/html; charset=utf-8');

$app->get('/', function () use ($app) {
    $search = $app->view()->fetch('search.php', array());
    $app->render('main.php', array('domaine' => $DOMAINE, 'defaultTitle' => $TITLE, 'defaultDescription' => $DESCRIPTION, 'searchField' => $search));
});

$app->get('/blog', function () use ($app) {
    $blog = new \Libs\Blog();
    $search = $app->view()->fetch('search.php', array());
    $app->render('blog.php', array('domaine' => $DOMAINE, 'defaultTitle' => $TITLE, 'defaultDescription' => $DESCRIPTION, 'blog' => $blog, 'searchField' => $search));
});

$app->get('/blog/:postTitle', function ($postTitle) use ($app) {
    $blog = new \Libs\Blog();
    $search = $app->view()->fetch('search.php', array());
    $app->render('blogpost.php', array('domaine' => $DOMAINE, 'defaultTitle' => $TITLE, 'defaultDescription' => $DESCRIPTION, 'blog' => $blog, 'searchField' => $search, 'postTitle' => $postTitle));
});

$app->get('/calendar/:timeMin', function ($timeMin) use ($app) {
    $app->contentType('application/json; charset=utf-8');
    $calendar = new \Libs\Calendar();
    $limit = $paramValue = $app->request->get('limit');
    $nextEvent = $calendar->getCalendar($timeMin, $limit);
    echo $nextEvent;
});

$app->get('/calendar', function () use ($app) {
    $app->contentType('application/json; charset=utf-8');
    $calendar = new \Libs\Calendar();
    $limit = $paramValue = $app->request->get('limit');
    $nextEvent = $calendar->getFutureEvents($limit);
    echo $nextEvent;
});

$app->run();
