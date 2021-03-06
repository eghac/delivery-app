@extends ('layouts.master')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Categoría Cliente: {{ $categoria->descripcion}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($categoria,['method'=>'PATCH','route'=>['categoria_cliente.update',$categoria->idcategoria_cliente]])!!}
			{{Form::token()}}			
			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}" placeholder="Descripción..">
			</div>
			<div class="form-group">
				<label for="minimo">Mínimo</label>
				<input type="text" name="minimo" class="form-control" value="{{$categoria->minimo}}" placeholder="Mínimo..">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}

		</div>
	</div>
@endsection