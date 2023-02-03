<?php
    include 'header.php';

    // hero
    include 'components/hero/simple/hero-klub.finomsport.php';

    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
    // content
?>
    <div class="wrapS post1col post1col-01">
        <?php
            foreach ($data->pages->klub->posts as $item) { ?>
                <div class="mb-2">
                    <h2>
                        <?php echo $item->title; ?>
                    </h2>

                    <p>
                        <?php echo $item->description; ?>
                    </p>
                </div>
            <?php }
        ?>
    </div>

    <div class="titleSubpage-03">
        <div class="wrapS">
            <div class="grid-1">
                <div class="mb-3">
                    <img src="<?php echo $data->pages->klub->features->feature1->img; ?>">
                </div>

                <div>
                    <h2>
                        <?php echo $data->pages->klub->features->feature1->title; ?>
                    </h2>

                    <h3>
                        <?php echo $data->pages->klub->features->feature1->subtitle; ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="benefits benefits-01">
        <div class="wrapS">
            <div class="grid-2">
                <?php
                foreach ($data->pages->klub->benefits as $item) { ?>
                    <div class="item">
                        <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1648042795/Finom%20Sport/icon_check_y7apzj.svg">
                        <?php echo $item->title; ?>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>

    <div class="logos logos-01">
        <div class="wrapS">
            <div class="grid-4">
                <?php
                    foreach ($data->pages->klub->logos as $item) { ?>
                        <a href="<?php echo $item->link; ?>" class="item">
                            <img src="<?php echo $item->img; ?>">
                        </a>
                    <?php }
                ?>
            </div>
        </div>
    </div>


<?php
    // contact
    include 'components/contact/cta/contact-cta.finomsport.php';

    include 'footer.php';
