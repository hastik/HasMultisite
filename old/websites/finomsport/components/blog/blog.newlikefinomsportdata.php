
<div id="blog" class="blog blog-02">
    <div class="wrap">
        <h2>
            <?=$title?>
        </h2>

        <div class="grid-3 ais">
            <?php
                foreach (array_slice($items, 0, 3) as $item):?>
                    <div class="blogBox blogBox-03">
                        <div class="blogBoxImage">
                            <img src="<?=$item->img; ?>">

                            <h3>
                                <?=$item->title; ?>
                            </h3>
                        </div>

                        <p>
                            <?=$item->description; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>
