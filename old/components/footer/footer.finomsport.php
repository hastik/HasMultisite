<?php
    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div class="footer footer-02">
    <div class="wrap">
        <div class="credits">
            <?php echo $data->footer->credits; ?>


            <span>
                <?php echo $data->footer->createdBy; ?>

                <img src="<?php echo $data->footer->logo; ?>">
            </span>
        </div>

        <a href="#body" class="scroll" />
    </div>
</div>
