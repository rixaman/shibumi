<div class="row">
	<? foreach($items as $item) : ?>
		<div class="span3">
			<div class="well focus-shadow">
				<h2><?= $item->title; ?></h2>
				<img src="<?=$item->image?>" class="img-circle" width="240" height="202"><br><br>
				<p><?= $item->description; ?></p>
			</div>
		</div>
	<? endforeach; ?>
</div>
