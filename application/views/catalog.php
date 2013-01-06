<div class="row">
	<? foreach($items as $item) : ?>
		<div class="span12">
			<div class="well focus-shadow">
				<h2><?= $item->title; ?></h2>
				<img src="<?=$item->image?>" class="img" width="640" height="957"><br><br>
				<p><?= $item->description; ?></p>
			</div>
		</div>
	<? endforeach; ?>
</div>
