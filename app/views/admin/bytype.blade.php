@extends ('templates.admin')

@section('content')
	<div class="col-sm-12 col-md-12 col-lg-12">
		<h1> {{ $title }} </h1>
	</div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <a href="{{ URL::to('za/mdnite/add-offer') }}"> <button type="button" class="btn btn-sm btn-success pull-right">Add New Offer</button> </a>
    </div> 
    <br />
    <br />
	<div class="col-sm-12 col-md-12 col-lg-12">
      	<table class="table table-bordered" id="admin_table">
				<thead>
					<th> ID </th>
					<th> Name </th>
					<th> Brand </th>
					<th> Category </th>
					<th> Ori-Price </th>
					<th> Dis-Price </th>
					<th> Address </th>
					<th> Action </th>
				</thead>
				<tbody>
				@foreach ($type as $type)
					<tr>
						<td> {{ $type['id'] }} </td>
						<td> {{ $type['name'] }} </td>
						<td> {{ $type['brand'] }} </td>
						<td> {{ $type['category'] }} </td>
						<td> {{ $type['o_price'] }} </td>
						<td> {{ $type['d_price'] }} </td>
						<td> {{ $type['address'] }} </td>
						<td> 
						<a class="btn btn-success btn-xs" href="{{ URL::to('za/mdnite/item-detail/' . $type['id']) }}" role="button"><span class="glyphicon glyphicon-search"></span></a>
						<a class="btn btn-warning btn-xs" href="{{ URL::to('za/mdnite/edit/' . $type['id']) }}" role="button"><span class="glyphicon glyphicon-wrench"></span></a> 
						<a class="btn btn-danger btn-xs" href="{{ URL::to('za/mdnite/delete/' . $type['id']) }}" role="button"><span class="glyphicon glyphicon-trash"></span></a>
												
						</td>
					</tr>
				@endforeach	
				</tbody>

				
			</table>
			
    </div>
@stop