@extends ('client/inquest/layout')

@section ('title')Encuesta de Alumnos @stop

@section ('content')

{{ Form::open (array('route' => 'client.inquest.store', 'method' => 'POST'), array('role' => 'form')) }}
	<div class="row"><h1>Encuesta De Alumnos</h1></div>
		<br>
	<div class="form-group col-md-9">
		    <legend>Cual fue la razon de que abandonaras lass clases?</legend>
		    <label class="radio">
					{{ Form::radio('question1', '1') }}
					Esta es la opcion numero uno para las respuestas de esta pregunta
			</label>
			<label class="radio">
					{{ Form::radio('question1', '2') }}
					Esta es la opcion numero dos para las respuestas de esta pregunta
			</label>
			<label class="radio">
					{{ Form::radio('question1', '3') }}
					Esta es la opcion numero tres para las respuestas de esta pregunta
			</label>
	</div>

	<div class="form-group form-inline col-md-9">
			<legend>Continuarás en el futuro cercano?</legend>
			<label class="radio">
					{{ Form::radio('question2', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question2', '2') }}
					No
			</label>
			<br><br>
			<legend>De ser asi, continuarás en el mismo sistema de Institutos tecnologicos?</legend>
			<label class="radio">
					{{ Form::radio('question3', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question3', '2') }}
					No
			</label>
			<br><br>
			<legend>Continuarás en la misma carrera?</legend>
			<label class="radio">
					{{ Form::radio('question4', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question4', '2') }}
					No
			</label>
			<br><br>
			<legend>Actualmente trabajas?</legend>
			<label class="radio">
					{{ Form::radio('question5', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question6', '2') }}
					No
			</label>
			<br><br>
			<legend>Tu sueldo alcanza para sostener tus estudios?</legend>
			<label class="radio">
					{{ Form::radio('question6', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question6', '2') }}
					No
			</label>
			<br><br>
			<legend>Tus actividades academicas corresponden a sus actividades laborales?</legend>
			<label class="radio">
					{{ Form::radio('question7', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question7', '2') }}
					No
			</label>
			<br><br>
			<legend>Tienes facilidad para asistir a clases?</legend>
			<label class="radio">
					{{ Form::radio('question8', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question8', '2') }}
					No
			</label>
			<br><br>
			<legend>Actualmente cual es tu estado de salud?</legend>
			<label class="radio">
					{{ Form::radio('question9', '1') }}
					Bueno
			</label>
			<label class="radio">
					{{ Form::radio('question9', '2') }}
					Regular
			</label>
			<label class="radio">
					{{ Form::radio('question9', '2') }}
					Malo
			</label>
			<br><br>
			<legend>Algun familiar cercano esta enfermo?</legend>
			<label class="radio">
					{{ Form::radio('question10', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question10', '2') }}
					No
			</label>
			<br><br>
			<legend>Esa enfermedad te impide asistir a clases con regularidad?</legend>
			<label class="radio">
					{{ Form::radio('question11', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question11', '2') }}
					No
			</label>
			<br><br>
			<legend>Va a dejar definitivamente los estudios?</legend>
			<label class="radio">
					{{ Form::radio('question12', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question12', '2') }}
					No
			</label><br><br>
			<legend>Cuentas con el apoyo moral de tu familia?</legend>
			<label class="radio">
					{{ Form::radio('question13', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question13', '2') }}
					No
			</label>
			<br><br>
			<legend>Cuentas con apoyo economico para continuar estudiando?</legend>
			<label class="radio">
					{{ Form::radio('question14', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question14', '2') }}
					No
			</label>
			<br><br>
			<legend>El motivo del abandono de estudios es por alguna cuestion academica?</legend>
			<label class="radio">
					{{ Form::radio('question15', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question15', '2') }}
					No
			</label>
			<br><br>
			<legend>Haz buscado alguna solucion a este problema?</legend>
			<label class="radio">
					{{ Form::radio('question16', '1') }}
					Si
			</label>
			<label class="radio">
					{{ Form::radio('question16', '2') }}
					No
			</label>
			<br><br>
			<legend>Tienes algun motivo diferente para abandonar los estudios, describelo?</legend>
			{{ Form::text('question17', null, array('class' => 'form-control', 'placeholder' => 'Describe tu motivo', 'rows' => '3'))}}
			<br><br>
	</div>

	<div class="row col-md-9 button">
		{{ Form::button('Enviar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
	</div>
	
{{ Form::close() }}

@stop