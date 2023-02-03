<?php
    
    include __DIR__.'/partials/header.php';

    $segment = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if(!$segment){
        include "pages/index.php";
    }
    else{
        include "pages/$segment.php";
    }

    include __DIR__.'/partials/footer.php';