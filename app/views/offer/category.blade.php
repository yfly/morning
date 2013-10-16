@extends ('templates.main')

@section('content')

		<h1><small class="text-title"> {{ $title }} </small></h1>

		<br />
		  	<div class="row">
		  		@foreach ($cat as $cat)	
					<div class="col-sm-12 col-md-6 col-lg-6">
					  	<a href="{{ URL::to('/detail/' . $cat['id']) }}" class="item_link">
						  	<div class="thumbnail" id="item">
						  		<h4 class="text-indent"><small class="caption"><strong>{{ $cat['name'] }} </strong></small></h4>
								<hr />
								<div class="col-sm-12 col-md-4 col-lg-4">
									<img src= "../pictures/{{ $cat['image'] }}" alt="image" class="img-responsive img-thumbnail">
								</div>
								<div class="col-sm-12 col-md-8 col-lg-8">
									@if ($cat['offer_type'] != 'event')
			        					<p>Price: <del>{{ $cat['o_price'] }} Ks</del></p>
			        					<p>Now: {{ $cat['d_price'] }} Ks</p>
									@else
										<p><span class="glyphicon glyphicon-calendar"></span> {{ $cat['event_date'] }}</p>
										<p><span class="glyphicon glyphicon-time"></span> {{ $cat['event_time'] }}</p>
									@endif
			        				@if ($cat['count'] > 0)
			        					<p class="v-count">{{ $cat['count'] }} View</p>
			        				@endif
			        				
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
@stop