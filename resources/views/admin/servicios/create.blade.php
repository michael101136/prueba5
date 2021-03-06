@extends('admin.layout.from')
@section('contenido')
<!-- include summernote css/js -->


<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Crear servicios</h1>

        </div>
       
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              {!! Form::open(['route' => ['services.store'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}

                 <div class="form-group">
                    <label for="exampleInputEmail1">Tipo servicio</label>
                    <select class="form-control" id="tiposervicio" name="tiposervicio">
                        @foreach($tipoServicio as $item)
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control"  placeholder="Enter email">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contenido</label>
                    <textarea id="contenido" name="contenido"></textarea>
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
        $('#contenido').summernote({
          height: 350,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: false
        });
    });
  </script>
@endsection