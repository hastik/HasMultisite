<?php include __DIR__."/../partials/header.php" ?>

<p>Toto je text, který do stránek přidává templates/default.php</p>

<?= Templater::getPartial("content") ?>



<?php include __DIR__."/../partials/footer.php" ?>
