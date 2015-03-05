<?php
    require_once __DIR__ ."/../vendor/autoload.php";
    require_once __DIR__ ."/../src/Place.php";

    session_start();

    if(empty($_SESSION['vacation_list'])){
        $_SESSION['vacation_list'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
         'twig.path' => __DIR__. '/../views'
    ));

    $app->get("/", function() use ($app){

        return $app['twig']->render('places.php', array('visited_places'=> Place::
        getAll()));
    });

    /* ---------form information--------*/

    $app->post("/tripInfo" , function() use ($app){
        $new_place = new Place($_POST['place'], $_POST['country']);
        $new_place->save();
        return $app['twig']->render('visited_new_place.php', array('visited_city'=>
        $new_place));


    });

    }
?>
