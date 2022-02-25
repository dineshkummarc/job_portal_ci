<!doctype html>
<html>
<head>
	<?= $this->include('includes/Head'); ?>
</head>
<body>
	<?=  $this->include('includes/Header'); ?>
    <?= $this->renderSection('content') ?>
	<?= $this->include('includes/Footer'); ?>
</body>
</html>