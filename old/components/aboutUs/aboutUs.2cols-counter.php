<div id="about" class="aboutUs aboutUs-02">
    <div class="wrap">
        <div class="grid-2">
            <div class="aboutUsContent">
                <h2 class="mb-3">
                    <?=$title?>
                </h2>

                <p>
                    <?=$description?>
                </p>

                <div class="counter-02 mt-3">
                    <div class="grid-7">
                        <?php foreach ($counter as $item):?>
                            <div class="counterItem">
                                    <span class="counterItemNumber <?=$item->sufix?>">
                                        <?=$item->number?>
                                    </span>

                                <?=$item->title?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <img src="<?=$image?>">
        </div>
    </div>
</div>
