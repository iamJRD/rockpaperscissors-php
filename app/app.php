<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/game_results", function() use ($app) {
        $player1 = $_GET['player1'];
        $player2 = $_GET['player2'];

        $newGame = new RockPaperScissors();
        $result = $newGame->playGame($player1, $player2);
        return $app["twig"]->render("home.html.twig", array('rungame' => $result));
    });


    return $app;
?>
