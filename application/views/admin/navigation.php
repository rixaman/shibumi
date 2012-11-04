<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?= URL::site(''); ?>"><?= $brand; ?></a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li <?= (($active === 'admin') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('admin'); ?>">Админка</a>
          <li <?= (($active === 'items') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('admin/items'); ?>">Список вкусняшек</a>
          </li>
          <li <?= (($active === 'item') ? 'class="active"' : NULL); ?>>
              <a href="<?php echo URL::site('admin/page/create'); ?>">Добавить вкусняшку</a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>