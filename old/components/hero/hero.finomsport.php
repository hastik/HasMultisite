
<div class="hero hero-3">
    <div class="background">
        <img src="<?php echo $data->hero->background; ?>">
    </div>

    <div class="row">
        <div class="col col-3 border-r-secondary pr-1">
            <h1>
                <?php echo $data->hero->claim->title; ?>
            </h1>

            <h2>
                <?php echo $data->hero->claim->subtitle; ?>
            </h2>
        </div>

        <div class="col col-7">
            <div class="grid-3">
                <?php
                    foreach ($data->hero->items as $item) { ?>
                        <a href="<?php echo $item->link; ?>">
                            <div class="box">
                                <img class="boxImage" src="<?php echo $item->img; ?>">

                                <div class="boxContent">
                                    <h3>
                                        <?php echo $item->title; ?>
                                    </h3>

                                    <p>
                                        <?php echo $item->description; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php }
                ?>
            </div>
        </div>
    </div>
</div>


