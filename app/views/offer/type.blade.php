@extends ('templates.main')

@section('content')
		<h1><small class="text-title title" > {{ $title }} </small></h1>
		<br />
		  	<div class="row">
		  		@foreach ($type as $type)	
					<div class="col-sm-12 col-md-6 col-lg-6">
					  	<a href="{{ URL::to('/detail/' . $type['id']) }}" class="item_link">
						  	<div class="thumbnail" id="item">
						  		<h4 class="text-indent"><small class="caption"><strong>{{ $type['name'] }} </strong></small></h4>
								<hr />
								<div class="col-sm-12 col-md-4 col-lg-4">
									<img src= "../pictures/{{ $type['image'] }}" alt="image" class="img-responsive img-thumbnail">
								</div>
								<div class="col-sm-12 col-md-8 col-lg-8">
									@if ($type['offer_type'] != 'event')
			        					<p>Price: <del>{{ $type['o_price'] }} Ks</del></p>
			        					<p>Now: {{ $type['d_price'] }} Ks</p>
									@else
										<p><span class="glyphicon glyphicon-calendar"></span> {{ $type['event_date'] }}</p>
										<p><span class="glyphicon glyphicon-time"></span> {{ $type['event_time'] }}</p>
									@endif
			        				@if ($type['count'] > 0)
			        					<p class="v-count">{{ $type['count'] }} View</p>
			        				@endif
			        				
			        			</div>
							</div>
						</a>
						@if( $type['offer_status'] == 'hot')
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