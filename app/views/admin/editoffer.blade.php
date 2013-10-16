@extends ('templates.admin')

@section('content')
	<div class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-8 col-md-8 col-lg-8 ">
        <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
            <h3><span class="label label-warning">Edit {{ $offer['name'] }}</span></h3>
        </div>

        {{ Form::open(array('url'=>'za/mdnite/edit/' . $offer['id'], 'method' => 'post',  'class' => 'form-horizontal', 'role' => 'form')) }}

          <div class="form-group">
            {{ Form::label('name', 'Name', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('name', $offer['name'], array('placeholder' => 'Product Name', 'class' => 'form-control')) }}
            </div>
          </div>          

          <div class="form-group">
            {{ Form::label('brand', 'Brand', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('brand', $offer['brand'], array('placeholder' => 'Brand', 'class' => 'form-control')) }}
            </div>
          </div>
          
          <div class="form-group">
            {{ Form::label('category', 'Category', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::select('category', array(
                'select'      => 'Select Category',
                'mobile'      => 'Mobile & Accessories',
                'computer'    => 'Computer & Accessories',
                'tickets'     => 'Tickets',
                'cloths'      => 'Clothings',
                'electronic'  => 'Electronic',
                'spa'         => 'Spa & Wellness',
                'other'       => 'Others', 
              ), 'select', array('class' => 'form-control'))}}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('offer_type', 'Offer Type', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              <span>{{ Form::radio('offer_type', 'product') }} Products</span>
              <span>{{ Form::radio('offer_type', 'event') }} Events</span>
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('o_price', 'Original Price', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('o_price', $offer['o_price'], array('placeholder' => 'Original Price', 'class' => 'form-control')) }}
            </div>
          </div>
        
          <div class="form-group">
            {{ Form::label('d_price', 'Discount Price', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('d_price', $offer['d_price'], array('placeholder' => 'Discount Price', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('quantity', 'Quantity', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('quantity', $offer['quantity'], array('placeholder' => 'Quantity', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('description', 'Description', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::textarea('description', $offer['description'], array('placeholder' => 'Description', 'class' => 'form-control','row' => '2')) }}
            </div>
          </div>
          
          <div class="form-group">
            {{ Form::label('address', 'Address', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::textarea('address', $offer['address'], array('placeholder' => 'Address', 'class' => 'form-control','row' => '2')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('phone', 'Phone', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('phone', $offer['phone'], array('placeholder' => 'Phone', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
            <h1><small>Start Date and End Date for Discount Item</small></h1>
          </div>
          
          <div class="form-group">
            {{ Form::label('start_date', 'Start Date', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('start_date', $offer['start_date'], array('placeholder' => 'Start Date', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('end_date', 'End Date', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('end_date', $offer['end_date'], array('placeholder' => 'End Date', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
            <h1><small>Date and Time for Event</small></h1>
          </div>
          
          <div class="form-group">
            {{ Form::label('event_date', 'Event Date', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('event_date', $offer['event_date'], array('placeholder' => 'Event Date', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('event_time', 'Event Time', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('event_time', $offer['event_time'], array('placeholder' => 'Event Time', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-offset-4 col-lg-12">
              {{ Form::submit('Update', array('class' => 'btn btn-success')) }}
              <a href="{{ URL::to('za/mdnite/all-offers') }}"> <button type="button" class="btn btn-danger">Cancel</button> </a>
            </div>
          </div>
        {{ Form::close() }}
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <h1><small>{{ $offer['name'] }}</small></h1>
        <span class="thumbnail"><img src= "../../../pictures/{{ $offer['image'] }}" /></span>
      </div>
    </div>
@stop