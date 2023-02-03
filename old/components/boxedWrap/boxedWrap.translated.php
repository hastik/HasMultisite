<div id="<?=$componentId?>" class="wrap boxed-wrap-translated boxed-wrap-secondary">
    <div class="row">
        <div class="col-4">
            <h2 class="titleBorderL mb-2">
                <?=$title?>
            </h2>
        </div>

        <div class="col-6">
            <div class="grid-2 gapRowNone">
                <?php foreach ($items as $item):?>
                    <div class="icon iconHorizontal">
                        <?php if($data->cons->icon):?>
                            <img src="<?=$data->cons->icon?>">
                        <?php else:?>
                            <span><?=$item->id . '.'?></span>
                        <?php endif;?>

                        <p>
                            <?=$item->title?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

