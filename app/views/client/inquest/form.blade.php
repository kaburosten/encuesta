@extends ('client/inquest/layout')

@section ('title')Encuesta de Alumnos @stop

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

@section ('content')

{{ Form::open (array('route' => 'client.inquest.store', 'method' => 'POST'), array('role' => 'form')) }}
	{{Form::hidden('alm_id',$alumno->id)}}
	<div class="row"><h1>Encuesta De Alumnos</h1></div>
		<br>
	<div class="form-group col-md-9">
		    <legend>1.- ¿Cual fue la razón de que abandonaras las clases?</legend>
		    <label class="radio horis" >
					{{ Form::radio('q1', '1') }}
					Esta es la opcion numero uno para las respuestas de esta pregunta
			</label>
			<label class="radio horis">
					{{ Form::radio('q1', '2') }}
					Esta es la opcion numero dos para las respuestas de esta pregunta
			</label>
			<label class="radio horis">
					{{ Form::radio('q1', '3') }}
					Esta es la opcion numero tres para las respuestas de esta pregunta
			</label>
	</div>

	<div class="form-group form-inline col-md-9">
			<legend>2.- ¿Continuarás en el futuro cercano?</legend>
			<label class="radio">
					{{ Form::radio('q2', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q2', '0') }}
					No
			</label>
			<br><br>
			<legend>3.- ¿De ser asi, continuarás en el mismo sistema de Institutos tecnologicos?</legend>
			<label class="radio">
					{{ Form::radio('q3', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q3', '0') }}
					No
			</label>
			<br><br>
			<legend>4.- ¿Continuarás en la misma carrera?</legend>
			<label class="radio">
					{{ Form::radio('q4', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q4', '0') }}
					No
			</label>
			<br><br>
			<legend>5.- ¿Actualmente trabajas?</legend>
			<label class="radio">
					{{ Form::radio('q5', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q6', '0') }}
					No
			</label>
			<br><br>
			<legend>6.- ¿Tu sueldo alcanza para sostener tus estudios?</legend>
			<label class="radio">
					{{ Form::radio('q6', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q6', '0') }}
					No
			</label>
			<br><br>
			<legend>7.- ¿Tus actividades academicas corresponden a sus actividades laborales?</legend>
			<label class="radio">
					{{ Form::radio('q7', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q7', '0') }}
					No
			</label>
			<br><br>
			<legend>8.- ¿Tienes facilidad para asistir a clases?</legend>
			<label class="radio">
					{{ Form::radio('q8', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q8', '0') }}
					No
			</label>
			<br><br>
			<legend>9.- ¿Actualmente cual es tu estado de salud?</legend>
			<label class="radio">
					{{ Form::radio('q9', '1') }}
					Bueno
			</label>
			<label class="radio">
					{{ Form::radio('q9', '2') }}
					Regular
			</label>
			<label class="radio">
					{{ Form::radio('q9', '3') }}
					Malo
			</label>
			<br><br>
			<legend>10.- ¿Algun familiar cercano esta enfermo?</legend>
			<label class="radio">
					{{ Form::radio('q10', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q10', '0') }}
					No
			</label>
			<br><br>
			<legend>11.- ¿Esa enfermedad te impide asistir a clases con regularidad?</legend>
			<label class="radio">
					{{ Form::radio('q11', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q11', '0') }}
					No
			</label>
			<br><br>
			<legend>12.- ¿Va a dejar definitivamente los estudios?</legend>
			<label class="radio">
					{{ Form::radio('q12', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q12', '0') }}
					No
			</label><br><br>
			<legend>13.- ¿Cuentas con el apoyo moral de tu familia?</legend>
			<label class="radio">
					{{ Form::radio('q13', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q13', '0') }}
					No
			</label>
			<br><br>
			<legend>14.- ¿Cuentas con apoyo economico para continuar estudiando?</legend>
			<label class="radio">
					{{ Form::radio('q14', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q14', '0') }}
					No
			</label>
			<br><br>
			<legend>15.- ¿El motivo del abandono de estudios es por alguna cuestion academica?</legend>
			<label class="radio">
					{{ Form::radio('q15', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q15', '0') }}
					No
			</label>
			<br><br>
			<legend>16.- ¿Haz buscado alguna solucion a este problema?</legend>
			<label class="radio">
					{{ Form::radio('q16', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('q16', '0') }}
					No
			</label>
			<br><br>
			<legend>17.- ¿Tienes algun motivo diferente para abandonar los estudios, describelo?</legend>
			{{ Form::textarea('q17', null, array('placeholder' => 'Describe tu motivo', 'rows' => '3'))}}

	</div>

	<div class="row col-md-4 button">
		{{ Form::button('Enviar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
	</div>
	
{{ Form::close() }}

@stop