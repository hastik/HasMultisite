<?php namespace ProcessWire; ?>

<?php $hash = wire()->page->path."/x"; bd($hash); ?>

<?php if($cache->get($hash)): ?>
	<?=$cache->get($hash) ?>
<?php else: ?>

    <?php Templater::partialBegin("page")?>
        <?php include __DIR__."/../page_layouts/default_xct_contentpage.php" ?>
    <?php Templater::partialEnd()?>

	<?php $value = Templater::getPartial("page") ?>
	<?php $cache->save($hash, $value, 1) ?>
	<?= $value ?>

<?php endif ?>
>
</div>

<?php include __DIR__."/../partials/footer.php" ?>





