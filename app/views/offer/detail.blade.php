@extends ('templates.main')

@section('content')
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">	
			<ol class="breadcrumb">
			  <li><a href="{{ URL::to('/') }}">Home</a></li>
			  @if ($offer['offer_type'] == 'product')
			  	<li><a href="{{ URL::to('/type/product') }}">Products</a></li>
			  @elseif($offer['offer_type'] == 'event')
			  	<li><a href="{{ URL::to('/type/event') }}">Events</a></li>
			  @endif

			  @if ($offer['offer_type'] != 'event')
			  <li><a href="{{ URL::to('/category/') }}/{{ $offer['category'] }}" class="title">{{ $offer['category'] }}</a></li>
			  @endif

			  <li class="active">{{ $offer['name'] }}</li>
			</ol>
		</div>	

		<div class="col-sm-12 col-md-12 col-lg-12">
    		<div class="panel panel-default">
    			<div class="panel-body">
    				<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4" id="img_detail">	
							<img src= "../pictures/{{ $offer['image'] }}" alt="image" class="img-responsive thumbnail">
						</div>

						<div class="col-sm-8 col-md-8 col-lg-8" id="item_detail">	
							<p class="lead text-danger"> {{ $offer['name'] }} </p>
								
							@if ($offer['offer_type'] == 'product')
							<dl class="dl-horizontal">
								<dt>Original Price: </dt> 
								<dd><del>{{ $offer['o_price'] }}</del> Ks</dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Discount Price:</dt>
								<dd>{{ $offer['d_price'] }} Ks</dd>
							</dl>
							@endif
							
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12" id="item_description">	
							
								<dl class="dl-horizontal">
								  <dt><span class="glyphicon glyphicon-pencil"></span> Description:</dt>
								  <dd>{{ $offer['description'] }}
								  </dd>
								</dl>
								<dl class="dl-horizontal">
								  <dt><span class="glyphicon glyphicon-map-marker"></span> Address:</dt>
								  <dd>{{ $offer['address'] }}
								  </dd>
								</dl>
								<dl class="dl-horizontal">
								  <dt><span class="glyphicon glyphicon-phone-alt"></span> Phone:</dt>
								  <dd>{{ $offer['phone'] }}
								  </dd>
								</dl>
								@if ($offer['offer_type'] == 'product')
									<dl class="dl-horizontal">
									  <dt><span class="glyphicon glyphicon-calendar"></span> Promotion Date:</dt>
									  <dd>{{ $offer['start_date'] . ' to ' . $offer['end_date'] }}
									  </dd>
									</dl>
								@elseif ($offer['offer_type'] == 'event')
									<dl class="dl-horizontal">
									  <dt><span class="glyphicon glyphicon-calendar"></span> Date:</dt>
									  <dd>{{ $offer['event_date'] }}
									  </dd>
									</dl>

									<dl class="dl-horizontal">
									  <dt><span class="glyphicon glyphicon-time"></span> Time:</dt>
									  <dd>{{ $offer['event_time'] }}
									  </dd>
									</dl>
								@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-sm-12 col-md-12 col-lg-12">	
			<h1><small class="text-title">Related Items</small>
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">	
			@foreach ($cat as $cat)	
				<div class="col-sm-6 col-md-4 col-lg-3">
					<a href="{{ URL::to('/detail/' . $cat['id']) }}" class="item_link">
						<div>
							<h4 class="text-center"><small class="text-danger"><strong> {{ $cat['name'] }}</strong></small></h4>
							<img src= "../pictures/{{ $cat['image'] }}" alt="image" class="img-responsive img-thumbnail">
							<div class="caption">
			        			<p class="text-center">Price: <del>{{ $cat['o_price'] }} Ks</del></p>
			        			<p class="text-center">Now: {{ $cat['d_price'] }} Ks</p>
			        		</div>
						</div>
					</a>
					@if( $cat['offer_status'] == 'hot')
					<div class="ribbon-wrapper-most">
						<div class="ribbon-most">
							<small> Hot Item</small>
						</div>
					</div>
					@endif
				</div>
			@endforeach	
		</div>
	</div>
@stop