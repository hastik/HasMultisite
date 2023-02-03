<?php
    $cooperationTitle = "Spolupráce";
    $profileImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1645624054/antonovic_web/spoluprace_profile_helu7h.png";
    $cooperationImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1645626361/antonovic_web/spoluprace_design-block_01_j4xjxx.png";
    $cooperationImageMobile = "https://res.cloudinary.com/patrik-vadura/image/upload/v1645627270/antonovic_web/spoluprace_design-block_01_mobile_granu4.png";
?>


<div id="cooperation" class="cooperation cooperation-01">
    <div class="wrap">
        <div class="grid-2">
            <div>
                <div class="imageBox">
                    <img src="<?php echo $profileImage; ?>" alt="cooperation">

                    <div class="description">
                        <h2>
                            <?php echo $cooperationTitle; ?>
                        </h2>

                        <p>
                            “Naši spolupráci stavíme na hodnotách, odpovědného přístupu, důvěry a fér jednání. Naši největší hodnotu pak tvoří lidé, kteří tyhle hodnoty představují. Máte stejný postoj, tak vítejte mezi námi.”
                        </p>

                        <a href="#" class="btn btnOutlinedPrimary mt-2" target="_blank">
                            Dozvědět se více
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <img class="desktopImage" src="<?php echo $cooperationImage; ?>" alt="cooperation">
                <img class="mobileImage" src="<?php echo $cooperationImageMobile; ?>" alt="cooperation">
            </div>
        </div>
    </div>
</div>