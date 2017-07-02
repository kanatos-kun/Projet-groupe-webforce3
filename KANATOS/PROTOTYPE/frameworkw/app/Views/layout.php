<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="UTF-8"/>
	<title><?= $this->e($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<?= $this->section('css')?>
		<?= $this->section('js')?>
</head>
<body>

		<div class="main-header">
			<?= $this->section('main-header')?>
		</div>
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<?= $this->section('footer') ?>
		</footer>
		<div class="copyright">
			<?= $this->section('footer2');?>
		</div>

	<?= $this->section('js-last')?>
</body>

</html>
