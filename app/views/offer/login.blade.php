<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>

	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/admin_style.css') }}
</head>
<body>

	<div class="container" id="adm_login">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 well well-lg">
				<strong> <p class="lead text-center text-danger"> Mid-Night Offer </p></strong>
				 {{ Form::open(array('url'=>'za/mdnite/login', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}

        
		          <div class="form-group">
		            {{ Form::label('email', 'E-Mail', array('class' => 'col-lg-4 control-label')) }} 
		            <div class="col-lg-8">
		              {{ Form::text('email', '', array('placeholder' => 'E-Mail', 'class' => 'form-control')) }}
		            </div>
		          </div>

		          <div class="form-group">
		            {{ Form::label('password', 'Password', array('class' => 'col-lg-4 control-label')) }} 
		            <div class="col-lg-8">
		              {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
		            </div>
		          </div>
				
					<div class="form-group">
			            <div class="col-lg-offset-4 col-lg-12">
			              {{ Form::submit('Login', array('class' => 'btn btn-danger')) }}
			            </div>
			          </div>
			        {{ Form::close() }}
		         
			</div>
		</div>
	</div>
</body>
</html>