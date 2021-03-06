@extends('layouts.admin')
@section('contenedor')
	
<div class="row">
	<div class="col-lg-4">
		
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificar Producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('modificar_productos',$id_prod)}}" method="POST">
              	@csrf
              	@Method('PUT')
                <div class="card-body">
                  <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control" name="categoria_id">
                           @foreach($categorias as $cat)	
                           <option value="{{$cat->id}}"  
                           	  @if($cat->id == $producto->categoria_id)
            						selected
        				      @endif >
        				      {{$cat->descripcion}}</option>
                         @endforeach 
                   
                          
                        </select>
                      </div>

                  <div class="form-group">
                    <label for="nombre">Nomnbre Producto</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$producto->nombre}}">
                  </div>
                  <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" name="precio" id="precio" value="{{$producto->precio}}" >
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Editar</button>
                </div>
              </form>
            </div>
	</div>
	<div class="col-lg-4">
		
	</div>

	
</div>
	

@endsection