<?php namespace ProcessWire; ?>

<?php Templater::partialBegin("content")?>



		<?php $pgs = repeaterItemsToTree($page->xcf_content_matrix); //dump($pgs); ?>


		<div>
			Toto je obsah v parcialu.
		</div>

		<h2>Navigace</h2>
		<?php $navigation = xcComponent("navigation_test")->render() ?>

		<?php $navigation = xcComponent("navigation_test")->fetch() ?>
		<?php echo $navigation ?>

		<?= xcComponent("navigation_test") ?>

		<h2>Matrix render</h2>
		<?php for($i=1;$i<2;$i++):?>
			<?= xcComponent("matrixarray_root",$pgs)?>
		<?php endfor ?>


		
	<?php Templater::partialEnd()?>


<?php include __DIR__."/default.php" ?>





