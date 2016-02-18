<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();
    if(empty($_SESSION['player1'])){
    $_SESSION['player1'] = array();
    }

    if(empty($_SESSION['player2'])){
    $_SESSION['player2'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        $newGame = new RockPaperScissors;
        $newGame::newGame();

        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/player1", function() use ($app) {
        return $app["twig"]->render("player1.html.twig");
    });

    $app->post("/player1", function() use ($app) {
        $_SESSION['player1'] = array();
        $player1 = $_POST['player1'];
        array_push($_SESSION['player1'] , $player1);
        
        return $app["twig"]->render("player2.html.twig", array('player1' => $player1));
    });

    $app->post("/game_end", function() use ($app) {
        $_SESSION['player2'] = array();
        $player2 = $_POST['player2'];
        array_push($_SESSION['player2'] , $player2);
        $newGame = new RockPaperScissors();
        $result = $newGame->playGame(($_SESSION['player1'][0]), ($_SESSION['player2'][0]));

        return $app["twig"]->render("game_end.html.twig", array('rungame' => $result));
    });


    return $app;
?>
