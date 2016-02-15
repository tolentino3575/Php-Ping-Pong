<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('index.html.twig');

    });

    $app->get("/ping-pong", function() use ($app){
        $number_input = $_GET['number'];
        $newPingPong = new PingPong;
        $results = $newPingPong->runPingPong($number_input);

        return $app['twig']->render('index.html.twig', array("results"=>$results));
    });

    return $app;
 ?>
