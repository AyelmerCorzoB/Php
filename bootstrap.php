<?php 

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container -> bind('Core\Database', function (){
    $config = require base_path('config.php');

    return $db = new Database($config['database']);
});

$db = $container ->resolve('Core\Database');

// $container ->resolve('Lo que esa intentando resolver');

App::setContainer($container);