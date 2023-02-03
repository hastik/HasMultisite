<?php

if (isset($_POST['contactform'])){


    /*$datafields = $data->contact->form->fields;

    foreach($datafields as &$datafield){
        $datafield = get_object_vars($datafield);
    }

    $fields = array();

    foreach($datafields as $datafield){

        if(isset($_POST[$datafield["name"]])){
            $field["label"] = $datafield["label"];
            $field["value"] = $_POST[$datafield["name"]];
        }
        $fields[]=$field;
    }

    $sendtos = explode(",",$data->contact->form->sendto);
    $subject = $data->contact->form->subject;
    $sendfrom = $data->contact->form->sendfrom;
    $sendto = $data->contact->form->sendto;

    $text = "";

    foreach($fields as $field){
        $text.=$field["label"].": ".$field["value"]."\n";
    }

    if(isset($_GET["debug"])){
        echo "<br><br>Pole do emailu: <br><br>";
        var_dump($fields);
        echo "<br><br>Od: $sendfrom<br><br>";
        echo "<br><br>Pro: $sendto<br><br>";
        echo "<br><br>Předmět: $subject<br><br>";
        echo "<br><br>Text: $text<br><br>";
    }

    foreach($sendtos as $sendto){
        mail($sendto,$subject,$text);
    }*/

    //var_dump($_POST);

    $fields = array();
    foreach($_POST as $key => $value){
        $field["name"]= $key;
        $field["value"]= $value=="on" ? "Ano" : $value;
        $fields[]=$field;

    }
    //echo "<br><br>";
    //var_dump($fields);

    $sendtos = explode(",",$sendto);
    $subject = $subject;
    $sendfrom = $sendfrom;
    $sendto = $sendto;

    $text = "";

    foreach($fields as $field){
        if($field["name"]!="contactform"){
            $text.=$field["name"].": ".$field["value"]."\n";
        }
    }

    //echo "<br><br>";
    //var_dump($text);

    $headers = 'From: web-poptavka@finomenergy.cz' . "\r\n" .
        'Reply-To: noreply@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    foreach($sendtos as $sendto){
        mail($sendto,$subject,$text,$headers);
    }
}



?>


<div id="<?=$componentId?>" class="form">
    <div class="wrap">
        <div class="grid-1">
            <h2>
                <?=$title?>
            </h2>

            <h3>
                <?=$subtitle?>
            </h3>

            <div class="grid-3 form-manual">
                <?php foreach ($manual as $item):?>
                    <div class="item">
                        <h3>
                            <span>
                               <?=$item->id . '.'?>
                            </span>

                            <?=$item->title?>
                        </h3>
                    </div>
                <?php endforeach; ?>
            </div>

            <form class="form-boxed" method="post">
                <div class="grid">
                    <b>
                        <?=$contactInfo->title?>
                    </b>
                </div>

                <div class="grid-3">
                    <?php foreach ($contactInfo->items as $item):?>
                        <div class="input smaller">
                            <div class="input__label">
                                <?=$item->label?>
                            </div>

                            <div class="input__box">
                                <input type="<?=$item->type?>" name="<?=$item->name?>" required />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="grid-3 gapColSmall ais mt-2">
                    <div>
                        <div class="grid mb-2">
                            <b>
                                <?=$timeInterval->title?>
                            </b>
                        </div>

                        <div class="grid gridLg-4 ais">
                            <?php foreach ($timeInterval->items as $item):?>
                                <label class="radio">
                                    <?=$item->label?>

                                    <input
                                            type="radio"
                                            id="<?=$item->name?>"
                                            name="time-interval"
                                            value="<?=$item->name?>"
                                        <?=($item->checked == true) ? "checked" : ""?>
                                    />
                                    <span class="icon"></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <div class="grid mb-2">
                            <b>
                                <?=$services->title?>
                            </b>
                        </div>

                        <div class="grid gridLg-4 ais">
                            <?php foreach ($services->items as $item):?>
                                <label class="radio">
                                    <?=$item->label?>

                                    <input
                                            type="radio"
                                            id="<?=$item->name?>"
                                            name="services"
                                            value="<?=$item->name?>"
                                        <?=($item->checked == true) ? "checked" : ""?>
                                    />
                                    <span class="icon"></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <div class="grid">
                            <b>
                                <?=$moreInfo->title?>
                            </b>
                        </div>

                        <div class="grid">
                            <?php foreach ($moreInfo->items as $item):?>
                                <div class="input smaller">
                                    <div class="input__box">
                                        <textarea name="<?=$item->name?>" rows="<?=$item->rows?>" required></textarea>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="grid mt-2">
                            <b>
                                <?=$saleCode->title?>
                            </b>
                        </div>

                        <div class="grid">
                            <?php foreach ($saleCode->items as $item):?>
                                <div class="input smaller">
                                    <div class="input__box">
                                        <input type="<?=$item->type?>" name="<?=$item->name?>" required />
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="action mt-2">
                    <input type="hidden" id="contactform" name="contactform" value="contactform">
                    <input class="btn btnOutlinedPrimary " type="submit" value="<?=$sendButton?>" />
                </div>
            </form>

            <?php if (isset($_POST['contactform'])):?>
                <?php component("contact.complete", $data->form->complete); ?>
            <?php endif;?>
        </div>
    </div>
</div>
