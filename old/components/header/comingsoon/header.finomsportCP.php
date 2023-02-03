<?php
    $data = json_decode(file_get_contents("data/finomsportCP.json"));
?>

<header class="header header-3 header-cp-1">
    <div class="wrap">
        <a href="#" class="logo">
            <img src="<?php echo $data->logo; ?>" />
        </a>

        <input class="navigationBtn" type="checkbox" id="navigationBtn" />

        <label class="navigationIcon" for="navigationBtn">
            <span class="navIcon"></span>
        </label>

        <ul class="navigation comingsoon">
            <?php
                foreach ($data->contact as $item) { ?>
                    <li>
                        <a href=<?php echo $item->type.":".$item->link; ?>;">
                            <?php echo $item->link; ?>
                        </a>
                    </li>
                <?php }
            ?>
        </ul>
    </div>
</header>
