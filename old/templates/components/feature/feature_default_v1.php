<?php
    namespace Processwire;

?>

<?php Templater::partialBegin("html")?>

<div class="componentFeature card flow" >
    <div class="svg"><?=$data->xcf_svg?></div>
    <h3> <?=$data->xcf_title?></h3>
    <p><?=$data->xcf_text?></p>
</div>





<?= Templater::partialEnd()?>

<?php $this->testMe("Halo halo")?>

<style>
<?php Templater::partialBegin("less")?>

    .card {
        background: var(--color-dark);
        color: var(--color-light);
        padding: var(--space-l-xl);
        padding-top: var(--space-xl-2xl);
        border-radius: var(--border-radius);
        max-width: unset;
    }

        .card ::selection {
        color: var(--color-dark);
        background: var(--color-secondary);
    }


    .card svg{
        display: block;
        height: 4em;
        margin-inline: auto;
    }

    <?php
    
    $this->addLessString("h2 { color: #abcabc; }");
    $this->addLessFile(__DIR__."/feature_v1.less");
    
    ?>
<?php Templater::partialEnd()?>
</style>