<div id="<?=$componentId?>" class="reference <?=$classes?>">
    <div class="background">
        <img src="<?=$background?>">
    </div>

    <div class="wrap">
        <h2>
            <?=$title?>
        </h2>


        <div class="referenceSlider">
            <?php for ($i = 0; $i < count($references); $i++):?>
                <input type="radio" name="slider" checked="checked" class="referenceSliderNav" />
            <?php endfor; ?>

            <div class="referenceSliderInner">
                <?php foreach ($references as $item):?>
                    <div class="referenceSliderContents">
                        <p class="referenceSliderTxt">
                            <?=$item->description?>
                        </p>

                        <div class="referenceSliderAvatar">
                            <img src="<?=$item->image?>">
                        </div>

                        <div class="referenceSliderCaption">
                        <span>
                            <?=$item->name?>
                        </span>

                            <?=$item->company?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
