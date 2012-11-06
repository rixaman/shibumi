<section id="miscellaneous">
	<div class="row">
		<div class="span4">
			<div class="alert vk focus-shadow">
				<div id="vk_groups"></div>
				<script type="text/javascript" src="//vk.com/js/api/openapi.js"></script>
				<!-- VK Widget -->
				<script type="text/javascript">
				VK.Widgets.Group("vk_groups", {mode: 0, width: "298", height: "200"}, 42669816);
				</script>				
			</div>
		</div>
		<div class="span4">
		  <div class="alert alert-success focus-shadow">
		    <a class="close">×</a>
		    <p><?= $marketing; ?></p>
		  </div>
		</div>
		<div class="span4">
		  <div class="alert alert-info focus-shadow">
		    <a class="close">×</a>
		  	<h3>Горячая линия:</h3>
		  	 <p><?= $phones; ?></p>
		  </div>
		</div>
	</div>
</section>