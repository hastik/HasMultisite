
    <div class="component grid3">
        <div class="column1">
            <?= Templater::getSlot("column1") ?>
        </div>
        <div class="column1">
            <?= Templater::getPartial("column2") ?>
        </div>
        <div class="column1">
            <?= Templater::getPartial("column3") ?>
        </div>
    </div>



<style>
    <?php Templater::partialBegin("css"); ?>

        .grid3{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap:2rem;
            margin: 4rem;
        }

        .grid3 > *{
            background: #e4e4e4;
            padding: 2rem;
        }

    <?php Templater::partialEnd("css"); ?>
</style>