<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Midnight Offer</title>
	
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/welcome.css') }}
	{{ HTML::script('js/jquery-1.9.1.js') }}
	{{ HTML::script('js/jquery.appear.js') }}

</head>
<body>

	<div class="row">
		<h1 class="text-center"> Hello! Welcome to Midnight Offer </h1>
	</div>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
			<div class="col-md-8 col-md-offset-2 card">

			</div>
		</div>
		
		
	</div>


	</div>
	
	

	<script type='text/javascript'>
		$(function() {
		  $(document.body).on('appear', '.card', function(e, $affected) {
		    // add class called “appeared” for each appeared element
		    $(this).addClass("appeared");
		  });
		  $('.card').appear({force_process: true});
		});
	</script>

</body>
</html>