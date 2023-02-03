<?php
    include 'utils.php';
    

    Site::resolveSite();

    if(Site::$conf){
        Site::loadData();
        $data = Site::$data;
        include 'templateEnginev2.php';
        include 'router.php';
    }
    else {
        include 'index_old.php';
    }
