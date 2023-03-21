<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Shoop</title>
	<!-- mobile apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Canoe Sprint" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //mobile apps -->

	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Buda:300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url('assets/css/kc.css')?>" rel='stylesheet' type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel='stylesheet' type="text/css" media="all" />
	<!-- //web-fonts -->
</head>

<script>
	function ajaxSearch2()
	{
		var input_data = $('#search_data2').val();

		var post_data = {
			'search_data': input_data,
			'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		};
		$.ajax({
			type: "POST",
			url: "http://localhost/online_shop/index.php/Search/autocomplete/",
			data: post_data,
			success: function (data) {
				// return success
				if (data.length > 0) {
					$('#suggestions2').show();
					$('#autoSuggestionsList2').addClass('auto_list');
					$('#autoSuggestionsList2').html(data);
					$("#autoSuggestionsList2").show();

					$(document).on('click', function (e) {
						if ($(e.target).closest("#autoSuggestionsList2").length === 0) {
							$("#autoSuggestionsList2").hide();
						}
					});
				}
			}
		});

	}
</script>
