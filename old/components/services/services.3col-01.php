<div id="<?=$componentId?>" class="services">
    <div class="wrap">
        <h2>
            <?=$title?>
        </h2>

        <div class="grid-3 ais">
            <?php foreach ($items as $item):?>
                <div class="servicesBox">
                    <img src="<?=$item->icon?>">

                    <h3>
                        <?=$item->title?>
                    </h3>

                    <p>
                        <?=$item->description?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
