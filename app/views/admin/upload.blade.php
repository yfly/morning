@extends ('templates.admin')

@section('content')
  <div class="col-sm-12 col-md-12 col-lg-12">
    <h3><span class="text-danger">Upload New Images</span></h3>
  </div>     

  <div class="col-sm-12 col-md-12 col-lg-12">
    {{ Form::open(array('route' => 'upload', "method" => "post", "enctype" => "multipart/form-data", "class" => "dropzone", "id" => "myDropZone" )) }}
    {{ Form::close() }}

    <script type="text/javascript">
      Dropzone.options.myDropZone = {
        init: function()
        {

          this.on('addedfile', function(file)
          {
            var _this = this;
             // Create the remove button
                var removeButton = Dropzone.createElement('<a class="dz-remove" href="javascript:undefined;">Remove file</a>');


                // Capture the Dropzone instance as closure.
                var _this = this;
                var _file = file;

                // Listen to the click event
                removeButton.addEventListener("click", function(e)
                {


                    // Make sure the button click doesn't submit the form:
                    e.preventDefault();
                    e.stopPropagation();


                    // If you want to the delete the file on the server as well,
                    // you can do the AJAX request here.
                    $.post('{{ URL::route("fileDelete") }}', {name: _file.name },function(data){
                        console.log(data);
                    });

                    // Remove the file preview.
                    _this.removeFile(file);

            });
            // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
          });
        }
      };
    </script>
  </div>      
@stop