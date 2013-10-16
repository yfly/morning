@extends ('templates.admin')

@section('content')
      <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
            <h3><span class="text-danger">Add New Offer</span></h3>
      </div>
      <br />
      <div class="col-sm-12 col-md-7 col-lg-7">
             
        {{ Form::open(array('url'=>'za/mdnite/add-offer', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}

          <div class="form-group">
            {{ Form::label('name', 'Name', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('name', '', array('placeholder' => 'Product Name', 'class' => 'form-control')) }}
            </div>
          </div>          

          <div class="form-group">
            {{ Form::label('brand', 'Brand', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('brand', '', array('placeholder' => 'Brand', 'class' => 'form-control')) }}
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
              {{ Form::text('o_price', '', array('placeholder' => 'Original Price', 'class' => 'form-control')) }}
            </div>
          </div>
        
          <div class="form-group">
            {{ Form::label('d_price', 'Discount Price', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('d_price', '', array('placeholder' => 'Discount Price', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('quantity', 'Quantity', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('quantity', '', array('placeholder' => 'Quantity', 'class' => 'form-control')) }}
            </div>
          </div>

          
          <div class="form-group">
            {{ Form::label('description', 'Description', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::textarea('description', '', array('placeholder' => 'Description', 'class' => 'form-control','row' => '2')) }}
            </div>
          </div>
          
          <div class="form-group">
            {{ Form::label('address', 'Address', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::textarea('address', '', array('placeholder' => 'Address', 'class' => 'form-control','row' => '2')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('phone', 'Phone', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('phone', '', array('placeholder' => 'Phone', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
            <h1><small>Start Date and End Date for Discount Item</small></h1>
          </div>
          
          <div class="form-group">
            {{ Form::label('start_date', 'Start Date', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('start_date', '', array('placeholder' => 'Start Date', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('end_date', 'End Date', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('end_date', '', array('placeholder' => 'End Date', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
            <h1><small>Date and Time for Event</small></h1>
          </div>
          
          <div class="form-group">
            {{ Form::label('event_date', 'Event Date', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('event_date', '', array('placeholder' => 'Event Date', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('event_time', 'Event Time', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('event_time', '', array('placeholder' => 'Event Time', 'class' => 'form-control')) }}
            </div>
          </div>
          
          <div class="form-group">
            {{ Form::label('image', 'Image Name', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('image', '', array('placeholder' => 'Image Name', 'class' => 'form-control')) }}
            </div>
          </div>          

          <div class="form-group">
            <div class="col-lg-offset-4 col-lg-12">
              {{ Form::submit('Add', array('class' => 'btn btn-success')) }}
              <a href="{{ URL::to('za/mdnite/all-offers') }}"> <button type="button" class="btn btn-danger">Cancel</button> </a>
            </div>
          </div>
        {{ Form::close() }}    
      </div>

      <div class="col-sm-12 col-md-5 col-lg-5 well well-sm">
        <table class="table table-bordered">
          <tr>
            <td> <strong> Picture </strong> </td>
            <td> <strong> Image Name </strong> </td>
          </tr>
        @foreach ($images as $image)
          <tr>
            <td class="align-center" width="50px">
              <span class="thumbnail"><img src= "../../pictures/{{ $image['image'] }}" /></span>
            </td>
            <td> {{ $image['image'] }} </td>
          </tr>
        @endforeach
      </div>

@stop