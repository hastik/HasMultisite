<div id="<?=$componentId?>" class="portfolio <?=$classes?>">
    <div class="wrap">
        <div class="wrapS">
            <h2>
                <?=$title?>
            </h2>

            <?php if ($description):?>
                <p class="description">
                    <?=$description?>
                </p>
            <?php endif; ?>
        </div>

        <div class="skills-01">
            <div class="grid-5">
                <?php foreach ($skills as $item):?>
                    <div class="skillsItem">
                        <span class="skillsItemNumber">
                            <?=$item->number?>
                        </span>

                        <?=$item->title?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="portfolioMasonry">
            <?php foreach ($gallery as $item):?>
                <div class="item">
                    <a href="<?=$item->link?>" target="_blank">
                        <img src="<?=$item->photo?>" />
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="wrapS">
            <div class="counter-01">
                <div class="grid-6">
                    <?php foreach ($counters as $item):?>
                        <div class="counterItem">
                            <span class="counterItemNumber">
                                <?=$item->number?>
                            </span>

                            <?=$item->title?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
