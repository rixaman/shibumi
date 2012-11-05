<div class="row">
	<? foreach($sections as $section) : ?>
		<div class="span3">
			<div class="well focus-shadow">
				<h2><?= $section->title; ?></h2>
				<img src="<?=$section->image?>" class="img-circle" width="240" height="202"><br><br>
				<p><?= $section->description; ?></p>
			</div>
		</div>
	<? endforeach; ?>
</div>
