<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?php echo Less::compile('bootstrap') ?>">
		<link rel="stylesheet" type="text/css" href="/public/css/styles.css">
		<script type="text/javascript" src="/public/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="/public/js/scripts.js"></script>

        <title><?= $title; ?></title>
</head> 

<body>
	<nav><?= $navigation; ?></nav>

	<br><br><br>

<div class="container">
	<?= $content; ?>
	<footer>
		<?= $footer; ?>
	</footer>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br>
</html>