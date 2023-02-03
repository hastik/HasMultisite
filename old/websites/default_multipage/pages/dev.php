<?php Templater::partialBegin("content"); ?>

<?=Templater::currentPartial()?>
        
        



        <?php Templater::partialBegin("component"); ?>

            <?php Templater::slotOpen("column1") ?>
                
                <h1>Obsah prvního sloupce</h1>
                <?= component("_blank.component", $data->blank) ?>

            <?php Templater::slotClose() ?>

            <?php Templater::partialBegin("column2") ?>
                <p>Obsah druhého sloupce</p>
                <?= componentV2("_blank_v2.simple",$data->blank) ?>
            <?php Templater::partialEnd() ?>

            <?php Templater::partialBegin("column3") ?>
                <p>Obsah třetího sloupce</p>
                <?= componentV2("_blank_v2.simple",["v2name"=>"Manuálně zadaný název"]) ?>
                <?= componentV2("custom._blank_v2.simple",["v2name"=>"Manuálně zadaný název"]) ?>
            <?php Templater::partialEnd() ?>

    

            <?= componentV2("custom._blank_v2.3columns") ?>

        <?= Templater::partialEnd() ?>
    
        <?=Templater::currentPartial()?>

    <?= Templater::getSlot("column1") ?>

<?php Templater::partialEnd();?>

<?= Templater::getSlot("column1") ?>




<?php include __DIR__."/../templates/default.php" ?>
