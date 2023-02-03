<div id="<?=$componentId?>" class="timeline timeline-01">
    <div class="wrap">
        <div class="grid-1">
            <h2>
                <?=$title?>
            </h2>

            <h3>
                <?=$subtitle?>
            </h3>

            <div class="timelineContent mt-3">
                <?php foreach ($items as $item):?>
                    <div class="timelineItem">
                        <div class="timelineDot"></div>

                        <div class="timelineInner">
                            <div class="row ais">
                                <div class="col-1">
                                    <h4 class="numbering">
                                        <?=$item->number?>
                                    </h4>
                                </div>

                                <div class="col-9">
                                    <h4>
                                        <?=$item->title?>
                                    </h4>

                                    <p>
                                        <?=$item->description?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
