<div id="<?=$componentId?>" class="contact contact-01">
    <div class="wrap">
        <h2>
            <?=$title?>
        </h2>

        <div class="grid-4">
            <?php foreach ($contactInfo->items as $item):?>
                <div class="contactBox <?=$classes?>">
                    <img src="<?=$item->icon?>">

                    <h4>
                        <?=$item->title?>
                    </h4>

                    <p>
                        <?=$item->description?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="wrapS">
            <?php component("contact.complete", $data->contact->complete); ?>

            <form>
                <div class="columns">
                    <?php foreach (array_slice($form, 0, 2) as $item):?>
                        <div class="input" >
                            <div class="input__label">
                                <?=$item->label?>
                            </div>

                            <div class="input__box">
                                <input type="<?=$item->type?>" name="<?=$item->name?>" required />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php foreach (array_slice($form, 2, 1) as $item):?>
                    <div class="input" >
                        <div class="input__label">
                            <?=$item->label?>
                        </div>

                        <div class="input__box">
                            <input type="<?=$item->type?>" name="<?=$item->name?>" required />
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach (array_slice($form, 3, 1) as $item):?>
                    <div class="input" >
                        <div class="input__label">
                            <?=$item->label?>
                        </div>

                        <div class="input__box">
                            <textarea name="<?=$item->name?>" rows="<?=$item->rows?>" required></textarea>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="action">
                    <a class="btn btnOutlinedPrimary" type="submit" value="Submit">
                        <?=$sendButton?>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
