<?php
    function data($arg) {
        $web = $_GET['web'];
        $data = json_decode(file_get_contents("data/".$web.".json"));

        print $data->$arg;
    }
?>
