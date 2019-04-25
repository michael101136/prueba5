@extends('admin.layout.from')
@section('contenido')
<!-- include summernote css/js -->

<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Crear tipo de servicios</h1>

        </div>
       
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              {!! Form::open(['route' => ['servicetypeinsertPost'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}


                <div class="form-group">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input type="text" id="nombre" name="nombre" class="form-control"  placeholder="Enter email">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contenido</label>
                    <textarea id="descripcion" name="descripcion"></textarea>
                </div>
                
               
                <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#descripcion').summernote();
    });
  </script>
@endsection