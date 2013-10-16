@extends ('templates.admin')

@section('content')
    <div class="col-sm-12 col-md-12 col-lg-12">
        <a href="{{ URL::to('za/mdnite/upload') }}"> <button type="button" class="btn btn-sm btn-success pull-right">Add New Image</button> </a>
    </div> 
    <br />
    <br />
	<div class="col-sm-12 col-md-12 col-lg-12">
        <table class="table table-bordered" id="admin_table">
          <tr>
            <td> <strong> Picture </strong> </td>
            <td> <strong> Image Name </strong> </td>
            <td> <strong> Action </strong></td>
          </tr>
        @foreach ($images as $image)
          <tr>
            <td class="align-center" width="80px">
              <span class="thumbnail"><img src= "../../pictures/{{ $image['image'] }}" /></span>
            </td>
            <td> {{ $image['image'] }} </td>
            <td><a class="btn btn-danger btn-xs" href="{{ URL::to('za/mdnite/images/delete/' . $image['id']) }}" role="button"><span class="glyphicon glyphicon-trash"></span></a> </td>
          </tr>
        @endforeach
    </div>
@stop