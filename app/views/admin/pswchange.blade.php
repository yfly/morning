@extends ('templates.admin')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="col-lg-offset-4 col-lg-12">
			@if(count($errors->all()) > 0)
				@foreach ($errors->all() as $message)
					<ul class="list-unstyled"> 
						<li class="text-danger"> {{ $message }} </li> 
					</ul>
		    	@endforeach
		    @endif
		</div>	
		<div class="col-lg-offset-4 col-lg-12">
		    <h1><small> Change Password </small></h1> 
		</div>
		<br />
      	{{ Form::open(array('url'=>'za/mdnite/passchange', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}

        	<div class="form-group">
		        {{ Form::label('oldPassword', 'Old Password', array('class' => 'col-lg-4 control-label')) }} 
		        <div class="col-lg-8">
		            {{ Form::password('oldPassword', array('placeholder' => 'Old Password', 'class' => 'form-control')) }}
		        </div>
		    </div> 

		    <div class="form-group">
		        {{ Form::label('newPassword', 'New Password', array('class' => 'col-lg-4 control-label')) }} 
		        <div class="col-lg-8">
		            {{ Form::password('newPassword', array('placeholder' => 'New Password', 'class' => 'form-control')) }}
		        </div>
		    </div>  

			<div class="form-group">
		        {{ Form::label('confPassword', 'Confirm Password', array('class' => 'col-lg-4 control-label')) }} 
		        <div class="col-lg-8">
		            {{ Form::password('confPassword', array('placeholder' => 'Confirm Password', 'class' => 'form-control')) }}
		        </div>
		    </div>	

		    <div class="form-group">
			    <div class="col-lg-offset-4 col-lg-12">
			        {{ Form::submit('Change', array('class' => 'btn btn-success')) }}
			    </div>
			</div>
        {{ Form::close() }}
    </div>
@stop