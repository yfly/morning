@extends ('templates.admin')

@section('content')
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="col-md-6">
	      	<div class="panel panel-default">
	      		<div class="panel-heading text-center">OFFERS</div>
				<div class="panel-body text-center">
					<a class="btn btn-info" href="{{ URL::to('za/mdnite/all-offers') }}" role="button"><span class="glyphicon glyphicon-search"></span> All Offers</a> 	
					<a class="btn btn-warning" href="{{ URL::to('za/mdnite/add-offer') }}" role="button"><span class="glyphicon glyphicon-plus"></span> Add New</a>
					<a class="btn btn-default" href="{{ URL::to('za/mdnite/all-offers/product') }}" role="button"><span class="glyphicon glyphicon-zoom-in"></span> Only Products</a>  
					<a class="btn btn-default" href="{{ URL::to('za/mdnite/all-offers/event') }}" role="button"><span class="glyphicon glyphicon-zoom-in"></span> Only Events</a>  	
				</div>
	      	</div>
	    </div>

	    
	    <div class="col-md-3">
		  	<div class="panel panel-default">
		   		<div class="panel-heading text-center">IMAGES</div>
					<div class="panel-body text-center">
						<a class="btn btn-info" href="{{ URL::to('za/mdnite/all-images') }}" role="button"><span class="glyphicon glyphicon-search"></span> All Images</a> 	
						<a class="btn btn-warning" href="{{ URL::to('za/mdnite/upload') }}" role="button"><span class="glyphicon glyphicon-plus"></span> Add New</a>
					</div>
				</div>
		   	</div>
		</div>

		<div class="col-md-3">
		  	<div class="panel panel-default">
		   		<div class="panel-heading text-center">PROFILE</div>
					<div class="panel-body text-center">
						<a class="btn btn-default" href="{{ URL::to('za/mdnite/passchange') }}" role="button"><span class="glyphicon glyphicon-wrench"></span> Change Password</a> 	
						<a class="btn btn-danger" href="{{ URL::to('/logout') }}" role="button"><span class="glyphicon glyphicon-off"></span> </a>
					</div>
				</div>
		   	</div>
		</div>
	    
    </div>
@stop