<?= Form::open('/admin/item', array('id'=>'form_item', 'class'=>'form-horizontal')) ?>
	<div class="control-group <?= isset($errors['title']) ? 'error' : '' ?>">
		<label class="control-label" for="title">Название</label>
		<div class="controls">
			<?= Form::input('title', $post['title'], array('placeholder'=>'нямка', 'id'=>'title')); ?>
			<span class="help-inline"><?= isset($errors['title']) ? $errors['title'] : ''; ?></span>
		</div>
	</div>
	<div class="control-group <?= isset($errors['price']) ? 'error' : '' ?>">
		<label class="control-label" for="price">Цена</label>
		<div class="controls">
			<?= Form::input('price', $post['price'], array('placeholder'=>'бесценно', 'id'=>'price')); ?>
			<span class="help-inline"><?= isset($errors['price']) ? $errors['price'] : ''; ?></span>
		</div>
	</div>
	<div class="control-group <?= isset($errors['content']) ? 'error' : '' ?>">
		<label class="control-label" for="content">Описание</label>
		<div class="controls">
			<?= Form::textarea('content', $post['content'], array('placeholder'=>'вкусно очень', 'id'=>'content')); ?>
			<span class="help-inline"><?= isset($errors['content']) ? $errors['content'] : ''; ?></span>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Добавить</button>
		</div>
	</div>
<?= Form::close() ?>