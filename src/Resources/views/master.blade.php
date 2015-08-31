<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js"></script>
	</head>
	<main>
		<div>
			<div class="row">
				@include('metrique-plonk::message')
			</div>
			@yield('content')
		</div>
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
	<script>
		$(document).foundation().ready(function(){
			$('div[data-reveal-auto]').foundation('reveal', 'open');
		});

	</script>
</html>