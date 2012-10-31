<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <? foreach($styles as $style): ?>
    	<?= HTML::style($style);?>
    <? endforeach; ?>

    <? foreach($scripts as $script): ?>
    	<?= HTML::script($script); ?>
    <? endforeach; ?>

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