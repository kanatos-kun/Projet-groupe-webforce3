<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8"/>
	<title><?= $this->e($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
    
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.css')?>"/>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css')?>"/>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/templatemo_misc.css')?>"/>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/templatemo_style.css')?>"/>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/demo.css')?>"/>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/footer-distributed.css')?>"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
    <script text="text/javascript" src="<?= $this->assetUrl("js/vendor/modernizr-2.6.1-respond-1.1.0.min.js") ?>"></script>
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