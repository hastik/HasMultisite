<?php
    namespace Processwire;

?>

<?php Templater::partialBegin("html")?>

<div class="componentFeature" style="padding: 2rem; background: yellow;">
    FEATURE s titulkem <?=$data->xcf_title?> a textem <?=$data->xcf_richtext?>
</div>

<?= Templater::partialEnd()?>

<?php $this->testMe("Halo halo")?>

<style>
<?php Templater::partialBegin("less")?>

    .componentFeature{
        margin: 1rem;
        border: 3px dotted black;
    }

    <?php
    
    Templater::$less->addStr("h2 { color: #abc$rand; }");
    Templater::$less->addFile(__DIR__."/feature_v1.less");
    
    ?>
<?php Templater::partialEnd()?>
</style>