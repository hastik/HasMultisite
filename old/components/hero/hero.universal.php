<div class="hero <?=$classes?>">
    <div class="background">
        <img src="<?=$background?>">
    </div>

    <div class="wrap grid-2">
        <div>
            <?php if ($socials):?>
                <div class="social">
                    <?php foreach ($socials as $item):?>
                        <a href="<?=$item->link?>" target="_blank">
                            <img src="<?=$item->icon?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <h1>
                <?=$title; ?>
            </h1>

            <?php if ($specialRoller):?>
                <div class="special">
                    <?php foreach ($specialRoller as $item):?>
                        <span>
                        <?=$item->title?>
                    </span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($image):?>
            <div class="image">
                <img src="<?=$image?>">
            </div>
        <?php endif; ?>
    </div>
</div>
