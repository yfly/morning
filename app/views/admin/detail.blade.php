@extends ('templates.admin')

@section('content')
	<div class="col-sm-12 col-md-12 col-lg-12">
      	<ol class="breadcrumb">
			  <li><a href="{{ URL::to('za/mdnite/all-offers') }}">All Offers</a></li>
			  @if ($item['offer_type'] == 'product')
			  	<li><a href="{{ URL::to('za/mdnite/all-offers/product') }}">Products</a></li>
			  @elseif($item['offer_type'] == 'event')
			  	<li><a href="{{ URL::to('za/mdnite/all-offers/event') }}">Events</a></li>
			  @endif

			  <li class="active">{{ $item['name'] }}</li>
		</ol>
    </div>
    
    <div class="col-sm-12 col-md-12 col-lg-12">
    	<div class="panel panel-default">
    		<div class="panel-body">
    			<div class="row">
	      			<div class="col-sm-4 col-md-4 col-lg-4">	
						<img src= "../../../pictures/{{ $item['image'] }}" alt="image" class="img-responsive thumbnail">
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8">	
						<dl class="dl-horizontal">
						  <dt><span class="lead text-danger"> Name :</span></dt>
						  <dd><span class="lead text-danger"> {{ $item['name'] }} </span>
						  </dd>
						</dl>
						@if ($item['offer_type'] == 'product')
						<dl class="dl-horizontal">
						  <dt>Original Price :</dt>
						  <dd><del>{{ $item['o_price'] }}</del> Ks
						  </dd>
						</dl>
						<dl class="dl-horizontal">
						  <dt>Discount Price :</dt>
						  <dd>{{ $item['d_price'] }} Ks
						  </dd>
						</dl>
						@endif
						<dl class="dl-horizontal">
						  <dt>Action :</dt>
						  <dd> 
							<a class="btn btn-success btn-xs" href="{{ URL::to('za/mdnite/item-detail/' . $item['id']) }}" role="button"><span class="glyphicon glyphicon-search"></span></a>

							<a class="btn btn-warning btn-xs" href="{{ URL::to('za/mdnite/edit/' . $item['id']) }}" role="button"><span class="glyphicon glyphicon-wrench"></span></a> 

							<a class="btn btn-danger btn-xs" href="{{ URL::to('za/mdnite/delete/' . $item['id']) }}" role="button"><span class="glyphicon glyphicon-trash"></span></a>
						  </dd>
						</dl>	
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<dl class="dl-horizontal">
						  <dt>Description:</dt>
						  <dd>{{ $item['description'] }}
						  </dd>
						</dl>
						<dl class="dl-horizontal">
						  <dt>Address:</dt>
						  <dd>{{ $item['address'] }}
						  </dd>
						</dl>
						<dl class="dl-horizontal">
						  <dt>Brand:</dt>
						  <dd>{{ $item['brand'] }}
						  </dd>
						</dl>
						<dl class="dl-horizontal">
						  <dt>Category:</dt>
						  <dd>{{ $item['category'] }}
						  </dd>
						</dl>
						<dl class="dl-horizontal">
						  <dt>Phone:</dt>
						  <dd>{{ $item['phone'] }}
						  </dd>
						</dl>
						@if ($item['offer_type'] == 'product')
							<dl class="dl-horizontal">
							  <dt> Promotion Date:</dt>
							  <dd>{{ $item['start_date'] . ' to ' . $item['end_date'] }}
							  </dd>
							</dl>
						@elseif ($item['offer_type'] == 'event')
							<dl class="dl-horizontal">
							  <dt> Date and Time:</dt>
							  <dd>{{ $item['event_date'] . ', ' . $item['event_time'] }}
							  </dd>
							</dl>
						@endif
					</div>
				</div>
			</div>
		</div>
    </div>
@stop