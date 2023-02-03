<header id="header" class="header">
    <div class="wrap">
        <a href="/" class="logo">
            <img src="<?=$logo?>" />
        </a>

        <a href="/" class="logoScroll">
            <img src="<?=$logoScroll?>" />
        </a>

        <input class="navigationBtn" type="checkbox" id="navigationBtn" />

        <label class="navigationIcon" for="navigationBtn">
            <span class="navIcon"></span>
        </label>

        <ul class="navigation">
            <?php foreach ($links as $item):?>
                <li>
                    <a
                        href="<?=$item->link?>"
                        class="<?=$item->class, (substr($_SERVER['REQUEST_URI'], 1) == $item->link) ? "active" : ""?>"
                        target="<?=($item->target == true) ? "_blank" : "_self"?>"
                    >
                        <?=$item->title?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>

<script>
    window.onscroll = function () {
        scrollFunction()
    }

    function scrollFunction () {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById('header').classList.add('headerScroll')
        } else {
            document.getElementById('header').classList.remove('headerScroll')
        }
    }
</script>
