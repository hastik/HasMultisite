<div id="<?=$componentId?>" class="aboutUs <?=$classes?>">
    <div class="background">
        <img src="<?=$background?>">
    </div>

    <div class="wrap">
        <div class="grid-2">
            <?php if ($imagePosition == 'left'):?>
                <img src="<?=$image?>">
            <?php endif; ?>

            <div class="aboutUsContent">
                <h2 class="mb-3">
                    <?=$title?>
                </h2>

                <p>
                    <?=$description?>
                </p>
            </div>

            <?php if ($imagePosition == 'right'):?>
                <img src="<?=$image?>">
            <?php endif; ?>
        </div>

        <div class="grid-3 ais">
            <?php foreach ($colsContent as $item):?>
                <div class="aboutUsContent">
                    <?php if ($item->icon):?>
                        <img src="<?=$item->icon?>">
                    <?php endif; ?>

                    <?php if ($item->title):?>
                        <h4>
                            <?=$item->title?>
                        </h4>
                    <?php endif; ?>

                    <p>
                        <?=$item->description?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
