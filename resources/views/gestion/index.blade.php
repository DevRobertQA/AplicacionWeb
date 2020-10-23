@extends ('layout.admin')
@section ('contenido')
<div class="row">

<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Fromulario de registro</h3>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-4 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
            	<label for="ingreso">Monto Ingreso</label>
            	<input type="text" name="descripcion" class="form-control" placeholder="0000.00">
            </div>
		</div>
		<div class="col-lg-4 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
            	<label for="egreso">Monto Egreso</label>
            	<input type="text" name="descripcion" class="form-control" placeholder="0000.00">
            </div>
		</div>
		<div class="col-lg-4 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Borrar</button>
            </div>
		</div>
	</div>
</div>

<hr>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Listado de registros </h3>
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
				 @foreach ($gestiones as $ges)
				<tr>
					<td>{{ $ges->fecha}}</td>
					<td>{{ $ges->montoIngreso}}</td>
					<td>{{ $ges->montoEgreso}}</td>
				@php
					$CalcularUtilidad=$ges->montoIngreso-$ges->montoEgreso
				@endphp
					<td>{{ $CalcularUtilidad }}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>


@endsection