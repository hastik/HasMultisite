<div id="<?=$componentId?>" class="benefits benefits-02">
    <div class="background">
        <img src="<?=$background?>">
    </div>

    <div class="wrap">
        <div class="grid-1">
            <h2>
                <?=$title?>
            </h2>

            <h3>
                <?=$subtitle?>
            </h3>
        </div>

        <div class="grid-4">
            <?php foreach ($items as $item):?>
                <div class="item">
                    <h4>
                        <?=$item->title?>
                    </h4>

                    <p>
                        <?=$item->description?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
