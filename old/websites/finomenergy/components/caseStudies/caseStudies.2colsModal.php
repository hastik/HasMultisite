<div id="<?=$componentId?>" class="caseStudies">
    <div id="modalTrigger" class="wrap">
        <div class="tabbed">
            <input type="radio" id="tab1" name="css-tabs" checked>
            <input type="radio" id="tab2" name="css-tabs">

            <ul class="tabs">
                <li class="tab">
                    <label for="tab1">
                        <?=$personalTitle?>
                    </label>
                </li>
                <li class="tab">
                    <label for="tab2">
                        <?=$companyTitle?>
                    </label>
                </li>
            </ul>

            <!-- PERSONAL -->
            <div class="tab-content">
                <div class="row mt-3 mb-3">
                    <div class="col-3 first">
                        <h2>
                            <span>
                                <img src="<?=$personal->pumps->icon?>">
                            </span>

                            <?=$personal->pumps->title?>
                        </h2>

                        <h4>
                            <?=$personal->pumps->return?>
                        </h4>

                        <ul class="cons">
                            <?php foreach ($personal->pumps->cons as $item):?>
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
                                <?=$personal->pumps->price->withoutDPH->label?>

                                <span class="secondary">
                                    <?=$personal->pumps->price->withoutDPH->price?>
                                </span>
                            </div>

                            <div class="priceItem">
                                <?=$personal->pumps->price->withDPH->label?>

                                <span class="primary">
                                    <?=$personal->pumps->price->withDPH->price?>
                                </span>
                            </div>
                        </div>

                        <a class="btn btnPrimary mt-2" href="#<?=$personal->pumps->modalId?>">
                            <?=$detailButton?>
                        </a>
                    </div>

                    <div class="col-4">
                        <img src="<?=$personal->image->desktop?>" class="desktopImage">
                        <img src="<?=$personal->image->mobile?>" class="mobileImage">
                    </div>

                    <div class="col-3 second">
                        <h2>
                            <span>
                                <img src="<?=$personal->solarPanels->icon?>">
                            </span>

                            <?=$personal->solarPanels->title?>
                        </h2>

                        <h4>
                            <?=$personal->solarPanels->return?>
                        </h4>

                        <ul class="cons">
                            <?php foreach ($personal->solarPanels->cons as $item):?>
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
                                <?=$personal->solarPanels->price->withoutDPH->label?>

                                <span class="secondary">
                                    <?=$personal->solarPanels->price->withoutDPH->price?>
                                </span>
                            </div>

                            <div class="priceItem">
                                <?=$personal->solarPanels->price->withDPH->label?>

                                <span class="primary">
                                    <?=$personal->solarPanels->price->withDPH->price?>
                                </span>
                            </div>
                        </div>

                        <a href="#<?=$personal->solarPanels->modalId?>" class="btn btnSecondary mt-2">
                            <?=$detailButton?>
                        </a>
                    </div>

                    <div class="col-10">
                        <p class="note">
                            <?=$note?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- COMPANY -->
            <div class="tab-content">
                <div class="row mt-3 mb-3">
                    <div class="col-3 first">
                        <h2>
                            <span>
                                <img src="<?=$company->pumps->icon?>">
                            </span>

                            <?=$company->pumps->title?>
                        </h2>

                        <h4>
                            <?=$company->pumps->return?>
                        </h4>

                        <ul class="cons">
                            <?php foreach ($company->pumps->cons as $item):?>
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
                                <?=$company->pumps->price->withoutDPH->label?>

                                <span class="secondary">
                                        <?=$company->pumps->price->withoutDPH->price?>
                                    </span>
                            </div>

                            <div class="priceItem">
                                <?=$company->pumps->price->withDPH->label?>

                                <span class="primary">
                                    <?=$company->pumps->price->withDPH->price?>
                                </span>
                            </div>
                        </div>

                        <a href="#<?=$company->pumps->modalId?>" class="btn btnPrimary mt-2">
                            <?=$detailButton?>
                        </a>
                    </div>

                    <div class="col-4">
                        <img src="<?=$company->image->desktop?>" class="desktopImage">
                        <img src="<?=$company->image->mobile?>" class="mobileImage">
                    </div>

                    <div class="col-3 second">
                        <h2>
                            <span>
                                <img src="<?=$company->solarPanels->icon?>">
                            </span>

                            <?=$company->solarPanels->title?>
                        </h2>

                        <h4>
                            <?=$company->solarPanels->return?>
                        </h4>

                        <ul class="cons">
                            <?php foreach ($company->solarPanels->cons as $item):?>
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
                                <?=$company->solarPanels->price->withoutDPH->label?>

                                <span class="secondary">
                                    <?=$company->solarPanels->price->withoutDPH->price?>
                                </span>
                            </div>

                            <div class="priceItem">
                                <?=$company->solarPanels->price->withDPH->label?>

                                <span class="primary">
                                    <?=$company->solarPanels->price->withDPH->price?>
                                </span>
                            </div>
                        </div>

                        <a href="#<?=$company->solarPanels->modalId?>" class="btn btnSecondary mt-2">
                            <?=$detailButton?>
                        </a>
                    </div>

                    <div class="col-10">
                        <p class="note">
                            <?=$note?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php component("modal.fullwidth-bottom", $personal->pumps); ?>
        <?php component("modal.fullwidth-bottom", $personal->solarPanels); ?>
        <?php component("modal.fullwidth-bottom", $company->pumps); ?>
        <?php component("modal.fullwidth-bottom", $company->solarPanels); ?>
    </div>
</div>
