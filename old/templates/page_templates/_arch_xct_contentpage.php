<?php namespace ProcessWire; ?>





<?php include __DIR__."/../partials/header.php" ?>

<div id="content">
	custom template z modules/webengine/page_templates
</div>	
<div class="description">
	
<?=$page->title?>

<?php include __DIR__."/../page_layouts/default.php" ?>




<?php if($cache->get("pager")): ?>
	<?=$cache->get("pager") ?>
<?php else: ?>

	<?php Templater::partialBegin("content")?>

		<?php $pgs = repeaterItemsToTree($page->xcf_content_matrix); //dump($pgs); ?>


		<div>
			Toto je obsah v parcialu.
		</div>

		<h2>Navigace</h2>
		<?= xcComponent("navigation_test")?>

		<h2>Matrix render</h2>
		<?php for($i=1;$i<2;$i++):?>
			<?= xcComponent("matrixarray_root",$pgs)?>
		<?php endfor ?>

		
	<?php Templater::partialEnd()?>

	<?php $value = Templater::getPartial("content") ?>
	<?php $cache->save("pager", $value, 1) ?>

	<?= $value ?>

<?php endif ?>


	
</div>

<?php include __DIR__."/../partials/footer.php" ?>





