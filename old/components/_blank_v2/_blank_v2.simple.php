<?php
    // Controller

?>


<?php Templater::partialBegin("html"); ?>


    <h2 class="test class">Toto je nová komponenta se jménem <?=$v2name?></h2>
    <p>Title z globálních dat je <?=Site::$data->meta->title?></p>

<?php Templater::partialEnd("html"); ?>




<style>
<?php Templater::partialBegin("css"); ?>
        h2.test{
            background: yellowgreen;
        }
    
<?php Templater::partialEnd("css"); ?>
</style>

