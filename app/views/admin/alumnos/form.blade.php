@extends ('admin/layout')

@section ('title') Formulario Alumno @stop

@section ('content')

<div class="row">
  @if ($errors->any())
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Por favor corrige los siguentes errores:</strong>
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif
</div>

<?php
if ($alumno->exists):
    $form_data = array('route' => array('admin.alumnos.update', $alumno->id), 'method' => 'PATCH');
    $action    = 'Editar';
else:
    $form_data = array('route' => 'admin.alumnos.store', 'method' => 'POST');
    $action    = 'Crear';        
endif;
?>

<h1>{{$action}} alumno</h1>
{{ Form::model($alumno, $form_data, array('role' => 'form')) }}
  {{Form::hidden('alm_code',str_random(32))}}
  <div class="row">
    <div class="form-group col-md-8">
      {{ Form::label('email', 'Dirección de E-mail') }}
      {{ Form::text('alm_email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('alm_fullname', 'Nombre completo') }}
      {{ Form::text('alm_fullname', null, array('placeholder' => 'Nombre y apellidos', 'class' => 'form-control')) }}        
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('alm_genero', 'Genero') }}<br>
      {{ Form::select('alm_genero',array('MASCULINO' => 'MASCULINO', 'FEMENINO' => 'FEMENINO') ,array('class' => 'form-control')) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('alm_carrera', 'Carerra') }}
      {{ Form::text('alm_carrera',null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('alm_materia', 'Materia') }}
      {{ Form::text('alm_materia',null,array('class' => 'form-control')) }}
    </div>
  </div>
  <div class="row">
   
    <div class="form-group col-md-4">
      {{ Form::label('alm_maestro', 'Maestro') }}
      {{ Form::text('alm_maestro', null,array('class' => 'form-control')) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('alm_periodo', 'Periodo') }}
      {{ Form::text('alm_periodo',null,array('class' => 'form-control')) }}
    </div>
  </div>
  {{ Form::button('Guardar alumno', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
  {{ HTML::link('/admin/alumnos', 'Cancelar', array('class' => 'btn btn-danger'))}}    
{{ Form::close() }}

@stop