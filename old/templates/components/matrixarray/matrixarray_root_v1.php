<?php
  namespace ProcessWire;
?>


<div class="matrixRoot">
    MATRIX array root

<?php foreach($data as $subitem) : ?>
  
    <?= xcComponent($subitem->getMatrixInfo()["type"],$subitem) ?>
<?php endforeach; ?>

</div>