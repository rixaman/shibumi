$(function () {
	$("li:eq(1)").click(function(){
		$.get(
			"/ajax",
			content,
			function(data){
				$(".container").append(data);
			}
		);
	});
});
