<?php
  namespace ProcessWire;
?>


<div style="padding: 2rem; background: #E62EE6;">
    Subpages s textem <?=$data->xcf_title?>

<?php foreach($data->xcf_page_parent->children() as $subpage) : ?>

    <div class="subpage">
        <span><?=$subpage->title?></span>
    </div>

<?php endforeach; ?>

</div>