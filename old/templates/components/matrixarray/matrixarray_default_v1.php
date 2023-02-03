<?php
  namespace ProcessWire;
?>


<?php foreach($data->subitems as $subitem) : ?>
    <?= xcComponent($subitem->getMatrixInfo()["type"],$subitem) ?>
<?php endforeach; ?>

