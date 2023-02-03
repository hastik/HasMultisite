<?php
    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div class="hero-simple hero-simple-1">
    <div class="wrap">
        <div class="background">
            <img src="<?php echo $data->pages->klub->hero->img; ?>">
        </div>

        <div class="content">
            <h1>
                <?php echo $data->pages->klub->hero->title; ?>
            </h1>

            <p>
                <?php echo $data->pages->klub->hero->description; ?>
            </p>
        </div>
    </div>
</div>


