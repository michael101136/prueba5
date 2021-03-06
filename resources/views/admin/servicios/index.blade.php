@extends('admin.layout.from')
@section('contenido')

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Servicios</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
        </div>
   
</div>

<div class="row">
        <div class="col-md-12">
            
          <div class="tile">
          <a href="{{('/services/create')}}" class="btn btn-primary">Nuevo </a><hr/>
            <div class="tile-body">
                
              <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Tipo de servicio</th>
                    <th>Categoria</th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($data as $item)

                  <tr>
                    <td>{{$item->idcategoriauser}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->titulo}}</td>
                    <td>
                      <div class="btn-group"><a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-primary" href="{{route('services.edit',$item->idcategoriauser)}}"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-primary" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    

@endsection

@section('script')

  <script type="text/javascript">$('#sampleTable').DataTable();</script>

@endsection



