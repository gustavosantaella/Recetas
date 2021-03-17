@extends('layout.layout')

@section('content')


<div class="d-flex justify-content-center">


	<div class="card col-md-5  shadow-lg text-center p-md-5 mt-5">
		<div class="card-body">
			<div class="cart-title text-center h3">Recetas</div>

			@include('partials.recetas')


			<br>
			<label for="">Agregar Receta</label>
			<br>
			<button type="button"  data-toggle="modal" data-target="#form" class="font-weight-bold btn btn-success">Agregar receta</button>
		</div>
	</div>



	<form action="{{ route('save') }}" method="post">
		@csrf
		
		@include('partials.form')
	</form>
</div>


@endsection
