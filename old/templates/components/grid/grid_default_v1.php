<?php     
    namespace ProcessWire;

    $styles = array();
    if(!empty($data->xcf_grid->custom_grid_min_item_size)){ $styles[]="--grid-item-minimum:".$data->xcf_grid->custom_grid_min_item_size;}
    if(!empty($data->xcf_grid->custom_gutter)){ $styles[]="--gutter:var(--space-".$data->xcf_grid->custom_gutter.")";}
    
?>

<div class="componentGrid grid <?=$data->xcf_grid->gridlayout?>"
    <?php if(count($styles)):?>
       style="<?=implode(";",$styles)?>"
    <?php endif;?>
    >
    <?= xcComponent("matrixarray",$data) ?>

</div>


<style>


<?php Templater::partialBegin("less")?>

    <?php
    $this->addLessFile(__DIR__."/../../styles/composition/grid.css");
    ?>
<?php Templater::partialEnd()?>
</style>