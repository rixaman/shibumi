<?php echo $content ?>
<?php $loadtype = (Request::current()->is_ajax()) ? 'Content part loaded using Ajax' : 'Whole page loaded using standard Page refresh'?>
<hr /><?php echo $loadtype ?>
