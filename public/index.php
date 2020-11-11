<?php

    require_once "../vendor/autoload.php";

    $route = new \App\route;
    echo "Isso está funcionando!!";
    echo "<hr>";
    print_r($route->getUrl());

  /* php -S localhost:8081*/
?>

