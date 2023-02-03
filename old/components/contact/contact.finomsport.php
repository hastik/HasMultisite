<?php
    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div id="contact" class="contact contact-02">
    <div class="wrap">
        <div class="grid-2">
            <div>
                <h2>
                    <?php echo $data->contact->title; ?>
                </h2>


                <form>
                    <div class="columns">
                        <?php
                            foreach (array_slice($data->contact->form, 0, 2) as $item) { ?>
                                <div class="input input-01" >
                                    <div class="input__label">
                                        <?php echo $item->label; ?>
                                    </div>

                                    <div class="input__box">
                                        <input type="<?php echo $item->type; ?>" name="<?php echo $item->name; ?>" required />
                                    </div>
                                </div>
                            <?php }
                        ?>
                    </div>

                    <?php
                        foreach (array_slice($data->contact->form, 2, 1) as $item) { ?>
                            <div class="input input-01" >
                                <div class="input__label">
                                    <?php echo $item->label; ?>
                                </div>

                                <div class="input__box">
                                    <input type="<?php echo $item->type; ?>" name="<?php echo $item->name; ?>" required />
                                </div>
                            </div>
                        <?php }
                    ?>

                    <?php
                        foreach (array_slice($data->contact->form, 3, 1) as $item) { ?>
                            <div class="input input-01" >
                                <div class="input__label">
                                    <?php echo $item->label; ?>
                                </div>

                                <div class="input__box">
                                    <textarea name="<?php echo $item->name; ?>" rows="<?php echo $item->rows; ?>" required></textarea>
                                </div>
                            </div>
                        <?php }
                    ?>

                    <div class="action">
                        <a class="btn btnOutlinedSecondary disabled" type="submit" value="Submit">
                            <?php echo $data->contact->send; ?>
                        </a>
                    </div>
                </form>
            </div>

            <div>
                <?php
                    foreach ($data->contact->items as $item) { ?>
                        <div class="contactBox">
                            <img src="<?php echo $item->img; ?>">

                            <div class="content">
                                <h4>
                                    <?php echo $item->title; ?>
                                </h4>

                                <p>
                                    <?php echo $item->content; ?>
                                </p>
                            </div>
                        </div>
                    <?php }
                ?>
            </div>
        </div>
    </div>
</div>
