<?php
    $data = json_decode(file_get_contents("data/finomsportCP.json"));
?>

<div class="footer footer-cp-01">
    <div class="wrap">
        <div class="credits">
            <?php echo $data->footer->credits; ?>


            <span>
                <img src="<?php echo $data->footer->logo; ?>">
            </span>
        </div>
    </div>
</div>
