{!! Form::open(array('url'=>'productosc/producto','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="form-group">
	<div class="input-group">
		
		<input type="text" class="form-control" name="searchText" placeholder="Buscar por nombre del producto o categoría.." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
		</span>
	
	</div>
</div>

{{Form::close()}}