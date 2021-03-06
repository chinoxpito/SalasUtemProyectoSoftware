@extends('funcionarios.plantilla')
@section('contenido')
 @if (count($errors) > 0)
	                    <div class="alert alert-danger">
	                      <ul>
	                        @foreach ($errors->all() as $error)
	                           <li>{{ $error }}</li>
                          @endforeach
	                      </ul>
                      </div>
                    @endif
         <p>
	
	<table>
		<td width=505><h2>Registro de Funcionarios</h2></td>
		
	</table>
</p>
<h4>Nuevo Funcionario</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
			{!! Form::open(['route' => 'funcionarios.store']) !!}
				<div class="form-group">
					{!! Form::text('rut', null,['class'=>'form-control', 'placeholder'=>'RUT'])!!}
				</div>
				<div class="form-group">
					{!! Form::text('nombres', null,['class'=>'form-control', 'placeholder'=>'Nombres'])!!}
				</div>
				<div class="form-group">
					{!! Form::text('apellidos', null,['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}
				</div>
				<div class="form-group">
					<p1>Departamento: </p1>{!! Form::select('departamento_id', $departamento) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Agregar', ["class" => "btn btn-success btn-block"]) !!}
				</div>
			{!! Form::close() !!}
      <p>
	    	@if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
      <table>
		
		<td><a href="/funcionarios" class="btn btn-default btn-sm">Volver</a>
		
	</table>
@stop
