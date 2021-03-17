

<div class="modal fade bd-example-modal-lg" id="form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="card">
			  <div class="card-body">
			  	<div class="card-title h3">
			  		Agregar receta
			  		<hr>
			  	</div>
			   <fieldset class="form-group">
				<input type="text" name="titulo" value="" placeholder="Titulo de la receta" class="form-control">
			</fieldset>
			<fieldset class="form-group">
				<label for="producto">Producto</label>

				<input type="radio" value="1" name="subreceta" id="producto" value="">
				<label for="sub">Sub-receta</label>
				<input type="radio" value="0" name="subreceta" id="sub" value="">
			</fieldset>
			<fieldset class="form-group row">
				<input type="text" name="estacion" value="" placeholder="Estacion" class="form-control">
				<input type="text" name="destino" value="" placeholder="Almacen destino" class="form-control mt-4">
			</fieldset>

			<fieldset class="form-group">
				<button type="button" class=" btn-sm btn-success font-weight-bold ml-4" id="more">A&ntilde;adir</button>
				<div id="new">
					
				</div>
				<div class="row campos" id="ig">
					<input type="text" name="ingrediente" value="" placeholder="Ingrediente" class="mt-2 form-control col-md-3">
					<input type="number" name="cantidad" value="" placeholder="Cantidad" class="mt-2 form-control   ml-4 col-md-3">
					<input type="number" name="medida" value="" placeholder="Medida" class="mt-2 form-control ml-4   col-md-3">
					
					
					
				</div>

			
			</fieldset>

			<fieldset class="form-group">
				<label for="prepa">Preparacion</label>
				
				<textarea name="descripcion"  id="prepa" class="form-control"></textarea>
			</fieldset>

			<fieldset class="form-group">
				<label for="">Rendimiento</label>
				
				<input type="number" name="rcantidad" value="" placeholder="Cantidad" class="mt-2 form-control">
				<input type="number" name="rmedida" value="" placeholder="Medida" class="mt-2 form-control">
			</fieldset>
				<fieldset class="form-group">
			<input type="submit" name=""class='btn btn-primary' value="Guardar" placeholder="">
			</fieldset>
			  </div>
			</div>
		</div>
	</div>
</div>

@section('script')
	<script>

		$('#more').click(()=>{
		    console.log($());
		
		})
	</script>
@endsection

