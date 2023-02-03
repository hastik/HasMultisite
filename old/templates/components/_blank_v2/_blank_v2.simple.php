<?php
    // Controller

?>

<h2 class="test custom class">Toto je CUSTOM nová komponenta se jménem <?=$v2name?></h2>
<p>Title z globálních dat je <?=Site::$data->meta->title?></p>

<style>
    h2.test.custom{
        background: yellow;
    }
</style>
