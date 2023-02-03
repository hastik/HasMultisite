<div id="<?=$componentId?>" class="cooperation <?=$classes?>">
    <div class="wrap">
        <div class="grid-2">
            <div>
                <div class="imageBox">
                    <img src="<?=$profileImage?>" alt="cooperation">

                    <div class="description">
                        <h2>
                            <?=$title?>
                        </h2>

                        <p>
                            <?=$description?>
                        </p>

                        <a href="<?=$buttonLink?>" class="btn btnOutlinedPrimary mt-2" target="_blank">
                            <?=$button?>
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <img class="desktopImage" src="<?=$image->desktop?>" alt="cooperation">
                <img class="mobileImage" src="<?=$image->mobile?>" alt="cooperation">
            </div>
        </div>
    </div>
</div>
