<?php
    $data = json_decode(file_get_contents("data/finomsportCP.json"));
?>

<div class="comingSoon comingSoon-01">
    <div class="background">
        <img src="<?php echo $data->mediaContent; ?>">
    </div>

    <div class="wrap grid-2">
        <div>
            <h1>
                <?php echo $data->title; ?>
            </h1>

            <hr />

            <h2>
                <?php echo $data->subtitle; ?>
            </h2>

            <div class="benefits">
                <?php
                    foreach ($data->benefits as $item) { ?>
                        <div class="benefitsItem">
                            <img src="<?php echo $item->img; ?>">
                            <?php echo $item->title; ?>
                        </div>
                    <?php }
                ?>
            </div>
        </div>
    </div>
</div>
