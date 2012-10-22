<?php $mediabase = Route::url('media'); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="<?php echo $mediabase ?>/pjax/js/jquery.pjax.js"></script>

  <script type="text/javascript">
    $(function(){
      // pjax
      $('ul a').pjax('#content')
    })
  </script>


<h2>PjaxDemo</h2>

<div id="nav">
	<ul>
		<li><a href="/pjaxdemo">Home</a></li>
		<li><a href="/pjaxdemo/page2">Page2</a></li>
		<li><a href="/pjaxdemo/page3">Page3</a></li>
	</ul>
</div>

<div id="content">
	<?php echo View::factory('pjax/content')->set('content', $content) ?>
</div>
