<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="best deal website and offer website in myanmar"/>
	<meta name="keywords" content="discount, todyevents, myanmar deals, လက္မွတ္, nightclub, midnight offer, ရုပ္ရွင္လက္မွတ္, events, ေဟာေျပာပြဲ, today discount"/>
	<title>
		{{ $title }} | Midnight Offer
	</title>

	@include('pages.head')

</head>
<body>
<div class="container">
      	@include('pages.header')

		<div class="row">
		  <div class="col-sm-12 col-md-8 col-lg-9" id = "left_side">
		  	@yield('content')
		  </div>
		  <!-- end of right side -->

		  <div class="col-sm-12 col-md-4 col-lg-3" id="right_side">
			@include('pages.sidebar')
		  </div>
		</div>
		<br />

		<div class="row" id="footer">
			<p class="text-center">copyright © Zawgyi Deals 2013</p>
		</div>
	</div>
</body>
</html>