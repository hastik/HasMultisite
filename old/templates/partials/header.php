<?php
    namespace Processwire;
?>
<!DOCTYPE html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>
        Default web
    </title>
    
    <?php 

        $basepath=wire()->config->paths->root."site/modules/webengine/templates/styles/hastik01/";
        $otherbasepath = "../modules/webengine/templates/styles/hastik01/";
        $filenames = "restart,utils,components,start,global";
        $files = explode(",",$filenames);
        $styledfiles = array();
        foreach($files as &$file){
            $styledfiles[]= $otherbasepath.$file.".css";
            $file = $basepath.$file.".css";
            
            bd(file_get_contents($file));
        }
        bd($basepath);
       bd(wire()->config->paths->modules);
        $filestring = $procache->css($styledfiles)?>

        <style>
             <?php   foreach($files as &$file){
                //$file = $basepath.$file.".css";
                if(file_exists($file)){
                    //echo file_get_contents($file);
                }
        }
            ?>
        </style>
    <link rel="stylesheet" href="<?=$filestring?>" />
    <style>

        



        <?= XcResourcer::getCss(); ?>
    </style>
</head>

<body id="body">
