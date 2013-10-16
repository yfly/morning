@extends ('templates.main')

@section('content')
		@if (sizeOf($results) > 0)
			<h1><small class="text-title">Search Result for {{ $keyword }}</small> </h1> 
		@else
			<h1><small class="text-title">No Result For {{ $keyword }}</small> </h1>
		@endif

		<br />
		  	<div class="row">
				@foreach ($results as $result)	
					<div class="col-sm-12 col-md-6 col-lg-6">
					  	<a href="{{ URL::to('/detail/' . $result['id']) }}" class="item_link">
						  	<div class="thumbnail" id="item">
						  		<h4 class="text-indent"><small class="caption"><strong>{{ $result['name'] }} </strong></small></h4>
								<hr />
								<div class="col-sm-12 col-md-4 col-lg-4">
									<img src= "pictures/{{ $result['image'] }}" alt="image" class="img-responsive img-thumbnail">
								</div>
								<div class="col-sm-12 col-md-8 col-lg-8">
									@if ($result['offer_type'] != 'event')
			        					<p>Price: <del>{{ $result['o_price'] }} Ks</del></p>
			        					<p>Now: {{ $result['d_price'] }} Ks</p>
									@else
										<p><span class="glyphicon glyphicon-calendar"></span> {{ $result['event_date'] }}</p>
										<p><span class="glyphicon glyphicon-time"></span> {{ $result['event_time'] }}</p>
									@endif
			        				@if ($result['count'] > 0)
			        					<p class="v-count">{{ $result['count'] }} View</p>
			        				@endif
			        				
			        			</div>
							</div>
						</a>
						@if( $result['offer_status'] == 'hot')
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