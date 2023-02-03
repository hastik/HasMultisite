<?php namespace ProcessWire; ?>



<?php include __DIR__."/../partials/header.php" ?>

<?php if($cache->get("pager")): ?>
	<?=$cache->get("pager") ?>
<?php else: ?>

	<?php $value = Templater::getPartial("content") ?>
	<?php $cache->save("pager", $value, 1) ?>
	<?= $value ?>

<?php endif ?>
<?php bd(Templater::$less->getCss()); ?>
</div>

<?php include __DIR__."/../partials/footer.php" ?>





