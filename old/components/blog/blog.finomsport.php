<?php
    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div id="blog" class="blog blog-02">
    <div class="wrap">
        <h2>
            <?php echo $data->blog->title; ?>
        </h2>

        <div class="grid-3 ais">
            <?php
                foreach (array_slice($data->blog->items, 0, 3) as $item) { ?>
                    <div class="blogBox blogBox-03">
                        <div class="blogBoxImage">
                            <img src="<?php echo $item->img; ?>">

                            <h3>
                                <?php echo $item->title; ?>
                            </h3>
                        </div>

                        <p>
                            <?php echo $item->description; ?>
                        </p>
                    </div>
                <?php }
            ?>
        </div>
    </div>
</div>
