@extends('layout.layout')

@section('content')
<div class="d-flex justify-content-center">


	<div class="card col-md-5  shadow-lg  p-md-5 mt-5">
		<div class="card-body">
			<a href="{{ route('index') }}" class="btn-sm btn-primary font-weight-bold text-decoration-none" title="">Volver</a>
			<div class="cart-title text-center h3">Receta #{{ $receta->id }}
			</div>
			<form action="{{ route('update',$receta->id) }}" method="post">
				@csrf
				
				<div class="form-group  mb-3">

					<h4>Titulo</h4>
					<input type="text" name="titulo" class="form-control" value="{{ $receta->titulo }}">
				</div>

				@if (!$receta->subreceta)
				<div class="form-group">
					<input type="text" name="estacion" class="form-control mb-3"  value="{{ $receta->estacion }}">
					<input type="text" name="destino" class="form-control mb-3" value="{{ $receta->destino }}">
				</div>
				@endif

				<div class="form-group">
					<div class="row">


						<input type="text" name="ingrediente"  value="{{ $receta->ingrediente }}" placeholder="Ingrediente" class="mt-2 form-control col-md-3">


						<input type="text" name="cantidad" value="{{ $receta->cantidad }}" placeholder="Cantidad" class="mt-2 form-control   ml-4 col-md-3">


						<input type="text" name="medida"  value="{{ $receta->medida }}" placeholder="Medida" class="mt-2 form-control ml-4   col-md-3">

					</div>

					<div class="form-group mt-4">
						<h4>Preparacion</h4>
						<textarea name="descripcion" class="form-control" >{{ $receta->descripcion }}</textarea>
					</div>

					<div class="form-group">
						<h4>Rendimiento</h4>
						<div class="row">
							<input type="text" name="rcantidad"  value="{{ $receta->rcantidad }}" placeholder="Cantidad" class="mt-2 form-control ml-4   col-md-3">

							<input type="text" name="rmedida"  value="{{ $receta->rmedida }}" placeholder="Medida" class="mt-2 form-control ml-4 col-md-3">
						</div>


					</div>

					<div class="form-group">
						<input type="submit" name=""  class="btn btn-primary" value="Guardar">

					</div>

				</form>
			</div>



		</div>
	</div>
</div>
@endsection