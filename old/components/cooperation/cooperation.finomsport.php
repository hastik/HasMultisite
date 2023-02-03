<?php
    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div id="cooperation" class="cooperation cooperation-02">
    <div class="background">
        <img src="<?php echo $data->cooperation->img; ?>">
    </div>

    <div class="wrap content">
        <div class="grid-2">
            <div>
                <h2>
                    <?php echo $data->cooperation->title; ?>
                </h2>

                <h3>
                    <?php echo $data->cooperation->subtitle; ?>
                </h3>

                <img src="<?php echo $data->cooperation->logo; ?>" class="logo">
            </div>
        </div>
    </div>
</div>
