<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zawgyi Deals</title>
	@include('pages.head')
	{{ HTML::style('css/admin_style.css') }}
  {{ HTML::style('css/dropzone.css') }}
  {{ HTML::script('js/dropzone.min.js') }}

</head>
<body>

	<!--
  | Flash Message
  -->
  @if (Session::has('success'))
    <div class="show_msg">
        <p class="success message"> {{ Session::get('success') }} </p>
    </div>
  @elseif(Session::has('error'))
    <div class="show_msg">
        <p class="error message"> {{ Session::get('error') }} </p>
    </div>
  @elseif(Session::has('info'))
    <div class="show_msg">
        <p class="info message"> {{ Session::get('info') }} </p>
    </div>
  @elseif(Session::has('warning'))
    <div class="show_msg">
        <p class="warning message"> {{ Session::get('warning') }} </p>
    </div>  
  @endif


	@include('pages.adminheader')
	<div class="container" id="admin_content">
		<div class="row">
			@yield('content')
		</div>
	</div>

	<script>
       $(".show_msg").hide("slide", { direction: "up" }, 7000);
  </script>
</body>
</html>