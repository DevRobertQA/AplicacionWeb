@extends ('layout.admin')
@section ('contenido')
<div class="row">

<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Formulario de registro</h3>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
            	<label for="descripcion">Monto Ingreso</label>
            	<input type="text" name="descripcion" class="form-control" placeholder="0000.00">
            </div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
            	<label for="descripcion">Monto Egreso</label>
            	<input type="text" name="descripcion" class="form-control" placeholder="0000.00">
            </div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
            	<label for="descripcion">Utilidad</label>
            	<input type="text" name="descripcion" disable class="form-control" placeholder="0000.00">
            </div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Borrar</button>
            </div>
		</div>
	</div>
</div>

<hr>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Listado de Registros</h3>
</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Fecha</th>
					<th>Ingreso</th>
					<th>Egreso</th>
					<th>Utilidad</th>
				</thead>
				<tr>
					<td>15/10/20</td>
					<td>2500.00</td>
					<td>2000.00</td>
					<td>500.00</td>
				</tr>
			</table>
		</div>
	</div>
</div>


@endsection