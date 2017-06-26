<!DOCTYPE html>
<?= $this->$json ?>
<?php $dependance = json_decode($json) ?>
<html lang="fr">
<head>
	<meta charset="UTF-8"/>
	<title><?= $this->e($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">

		<?php foreach($dependance["css"] as $index => $value)
				{
					echo "<link type='text/css' rel='stylesheet' href='".$value."'/>";
				}
				?>
		<?php foreach($dependance["js"] as $index => $value)
				{
					echo "<script type='text/javascript' src='".$value."'/>";
				}
		?>
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
