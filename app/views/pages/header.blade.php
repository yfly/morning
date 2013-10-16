	<div class="masthead">
        <a href="{{ URL::to('/') }}"><h2 class="text-title">Mid-Night Offer (Beta)</h2></a>

        <nav class="navbar navbar-inverse" role="navigation">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
		  </div>

		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse navbar-ex1-collapse">
		    <ul class="nav navbar-nav">
		      <li><a href="{{ URL::to('/type/product') }}">Products</a></li>
		      <li><a href="{{ URL::to('/type/event') }}">Events</a></li> 
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="{{ URL::to('/category/mobile') }}">Mobile and Accessories</a></li>
		          <li><a href="{{ URL::to('/category/computer') }}">Computer and Accessories</a></li>
		          <li><a href="{{ URL::to('/category/tickets') }}">Tickets</a></li>
		          <li><a href="{{ URL::to('/category/cloths') }}">Clothings</a></li>
		          <li><a href="{{ URL::to('/category/electronic') }}">Electronic</a></li>
		          <li><a href="{{ URL::to('/category/spa') }}">Spa and Wellness</a></li>
		          <li><a href="{{ URL::to('/category/other') }}">Others</a></li>
		        </ul>
		      </li>    
		    </ul>
		   
		   	<ul class="nav navbar-nav navbar-right">
			    {{ Form::open(array('url'=>'search', 'method' => 'get', 'class' => 'navbar-form ', 'role' => 'search')) }}
			          <div class="form-group">
			              {{ Form::text('search', '', array('placeholder' => 'Search', 'class' => 'form-control')) }}
			          </div>  
			          {{ Form::submit('Search', array('class' => 'btn btn-success')) }}     
				{{ Form::close() }}
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>
    </div>

