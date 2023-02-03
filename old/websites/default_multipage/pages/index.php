<?php Templater::partialBegin("content"); ?>

    <?= component("_blank.component", $data->blank) ?>

    <?= componentV2("_blank_v2.simple",$data->blank) ?>

    <?= componentV2("_blank_v2.simple",["v2name"=>"Manuálně zadaný název"]) ?>

    <?= componentV2("custom._blank_v2.simple",["v2name"=>"Manuálně zadaný název"]) ?>

<?php Templater::partialEnd("content");?>

<?php include __DIR__."/../templates/default.php" ?>
