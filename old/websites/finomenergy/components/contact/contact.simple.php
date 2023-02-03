<div id="<?=$componentId?>" class="contact-simple contact-simple-01">
    <div class="wrapS ais">
        <h2>
            <?=$title?>
        </h2>

        <div class="grid-2">
            <div>
                <h4>
                    <?=$company->title?>
                </h4>

                <?php foreach ($company->items as $item):?>
                    <p>
                        <?=$item->title?>
                    </p>
                <?php endforeach; ?>
            </div>

            <div>
                <h4>
                    <?=$contactInfo->title?>
                </h4>

                <?php foreach ($contactInfo->items as $item):?>
                    <p>
                        <?=$item->title?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
