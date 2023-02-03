<?php
    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div id="contact" class="contact-cta contact-cta-01">
    <div class="wrap">
        <div class="grid-2">
            <div>
                <h2>
                    <?php echo $data->contact->cta->title; ?>
                </h2>

                <h3>
                    <?php echo $data->contact->cta->subtitle; ?>
                </h3>
            </div>

            <div>
                <a href="/websites/finomsport/contact.php" class="btn btnOutlinedSecondary">
                    <?php echo $data->contact->cta->btn; ?>
                </a>
            </div>
        </div>
    </div>
</div>
