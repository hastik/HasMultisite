<?php
    namespace Processwire;
    $json = $data->xcf_code_json;
    $json = json_decode($json,1);
?>

<?php Templater::partialBegin("html")?>

<div class="componentCustom" >
    Vlastní komponenta <?=$data->xcf_title?> a textem <?=$data->xcf_text?>

    <div class="grid componentGrid">
        <?php foreach($json["sites"] as $site): ?>
            <div class="gridItem">
                <h4><?=$site["title"]?></h4>
                <p>
                    Folder = <?=$site["folder"]?><br>
                    Get web =<?=$site["getweb"]?><br>
                    Servername = <?=$site["servername"]?><br>                    

                </p>
            </div>
        <?php endforeach;?>
    </div>
</div>

<?= Templater::partialEnd()?>

    <?php $this->addLessString(".componentCustom { color: white; background: black; padding: 3rem; font-size: 0.75rem; }"); ?>

<style>
<?php Templater::partialBegin("less")?>
    
<?php Templater::partialEnd()?>
</style>