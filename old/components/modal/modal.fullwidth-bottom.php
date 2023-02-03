<dialog
    id="<?=$modalId?>"
    class="modal modal-bottom"
    tabindex="-1"
    role="dialog"
>
    <div class="modalBackdrop"></div>

    <div class="modalContent">
        <a href="#modalTrigger" class="close" aria-label="Close">&times;</a>

        <div class="row ais">
            <div class="col-3 leftImageBox <?=$modalColorTheme?>">
                <div class="background">
                    <img src="<?=$backgroundImage?>">
                </div>

                <h2>
                    <span>
                        <img src="<?=$iconModal?>">
                    </span>

                    <?=$title?>
                </h2>

                <h4>
                    <?=$return?>
                </h4>

                <ul class="cons">
                    <?php foreach ($cons as $item):?>
                        <li>
                            <span>
                                <?=$item->number?>
                            </span>

                            <?=$item->title?>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="price">
                    <div class="priceItem">
                        <?=$price->withoutDPH->label?>

                        <span class="secondary">
                            <?=$price->withoutDPH->price?>
                        </span>
                    </div>

                    <div class="priceItem">
                        <?=$price->withDPH->label?>

                        <span class="primary">
                            <?=$price->withDPH->price?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-4 description">
                <h4>
                    <?=$description->title?>
                </h4>

                <table class="tableDescription">
                    <?php foreach ($description->items as $item):?>
                        <tr>
                            <td>
                                <?=$item->title?>
                            </td>

                            <td>
                                <?=$item->description?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <img src="<?=$graph?>" class="graph">
            </div>

            <div class="col-3 specification">
                <h4>
                    <?=$specification->title?>
                </h4>

                <?php foreach ($specification->items as $item):?>
                    <div class="icon iconHorizontal">
                        <?php if($data->cons->icon):?>
                            <img src="<?=$data->cons->icon?>">
                        <?php endif;?>

                        <p>
                            <?=$item->title?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</dialog>
