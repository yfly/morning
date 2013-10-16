@extends ('templates.main')

@section('content')
		<h1><small class="text-title">Today Deals</small></h1>
		<br />
		  	<div class="row">
		  		@foreach ($offers as $offer)	
					<div class="col-sm-12 col-md-6 col-lg-6">
					  	<a href="{{ URL::to('/detail/' . $offer['id']) }}" class="item_link">
						  	<div class="thumbnail" id="item">
						  		<h4 class="text-indent"><small class="caption"><strong>{{ $offer['name'] }} </strong></small></h4>
								<hr />
								<div class="col-sm-12 col-md-4 col-lg-4">
									<img src= "pictures/{{ $offer['image'] }}" alt="image" class="img-responsive img-thumbnail">
								</div>
								<div class="col-sm-12 col-md-8 col-lg-8">
									@if ($offer['offer_type'] != 'event')
			        					<p>Price: <del>{{ $offer['o_price'] }} Ks</del></p>
			        					<p>Now: {{ $offer['d_price'] }} Ks</p>
									@else
										<p><span class="glyphicon glyphicon-calendar"></span> {{ $offer['event_date'] }}</p>
										<p><span class="glyphicon glyphicon-time"></span> {{ $offer['event_time'] }}</p>
									@endif
			        				@if ($offer['count'] > 0)
			        					<p class="v-count">{{ $offer['count'] }} View</p>
			        				@endif
			        				
			        			</div>
							</div>
						</a>
						@if( $offer['offer_status'] == 'hot')
							<div class="ribbon-wrapper-most">
								<div class="ribbon-most">
									<small> Hot Item</small>
								</div>
							</div>
						@endif
					</div>
				@endforeach	
			</div>
@stop