<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Titulo</th>
				<th scope="col">Producto</th>
				<th scope="col" colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($recetas as $receta)
			<tr>
				<td>{{ $receta->id }}</td>
				<td>{{ $receta->titulo }}</td>
				@if ($receta->subreceta)
				<td><i class="fas fa-check text-success"></i></td>

				@else
				<td><i class="fas fa-times text-danger"></i></td>
				@endif

				<td><a href="{{ route('destroy',$receta->id) }}" title="">Eliminar</a></td>
				<td><a href="{{ route('editar',$receta->id) }}" title="">Modifcar</a></td>
				<td><a href="{{ route('ver',$receta->id) }}" title="">Consultar</a></td>
			</tr>
			@endforeach

		</tbody>

	</table>
	{{ $recetas->links('pagination::bootstrap-4') }}
</div>