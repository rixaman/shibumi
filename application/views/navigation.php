<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#"><?= $brand; ?></a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li <?= (($active === '/') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site(); ?>">Главная</a>
          </li>
          <li <?= (($active === 'catalog') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('catalog'); ?>">Меню</a>
          </li>
          <li <?= (($active === 'health') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('health'); ?>">О пользе</a>
          </li>
          <li <?= (($active === 'about') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('about'); ?>">О кафе</a>
          </li>
          <li <?= (($active === 'contacts') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('contacts'); ?>">Контакты</a>
          </li>
          <li <?= (($active === 'item') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('admin/item/create'); ?>">Добавить вкусняшку</a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>