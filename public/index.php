<?php
    # incluide the vendors autoload
    require ("../vendor/autoload.php");
    
    #instatntaties a new Slim Aplication
    $app =new \Slim\Slim();
    
    #defines a routr for the GET method
    $app->get("/",function(){
        $view = require ("index.html");
         echo $view;
    });
    
    #Actually runs the application
    $app->run();
    