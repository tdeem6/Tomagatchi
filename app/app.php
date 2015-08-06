<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Tamagotchi.php';

    session_start();

    if (empty($_SESSION[0])) {
        $_SESSION[0] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('main.html.twig', array('tamagotchi' => $_SESSION[0])

    });

    $app->post("/todo", function() use ($app)) {
        $todo = $_POST['todo'];
        if ($todo == "feed") {
            $_SESSION[0]->feed;
        }elseif ($todo == "play") {
            $_SESSION[0]->play;
        }elseif ($todo == "sleep") {
            $_SESSION[0]->sleep;
        }elseif ($todo == "nothing") {
            $_SESSION[0]->time;
        }

        return $app['twig']->render('todo.html.twig', array('tamagotchi' => $_SESSION[0])
    }

    return $app;
?>
