<?php defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php'); ?>

<main>
	<div class="uk-container">
		<?= $innerContent; ?>
	</div>
</main>

<?php $view->inc('elements/footer.php');
