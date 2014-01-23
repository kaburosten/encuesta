@extends ('admin/layout')

@section ('title') Crear Usuarios @stop

@section ('content')

<h1>Graficas</h1>
	
<form class="form-inline" role="form" action="" id="form-grafica">
   <div class="row">	
      <div class="form-group col-md-4">
         {{ Form::label('', 'Tipo de datos a graficar') }}<br>
         <select name="column" id="" class="form-control">
            <option value="alm_carrera">Carrera</option>
            <option value="alm_materia">Materia</option>
            <option value="alm_genero">Genero</option>
            <option value="alm_maestro">Maestro</option>
            <option value="alm_status">Status</option>
         </select>
      </div>
      <div class="form-group col-md-4">
         {{ Form::label('', 'Periodo') }}<br>
         <input name="periodo" type="text" class="form-control col-md-3">
      </div>
      <div class="form-group col-md-2">
          <label for=""></label>
         <input type="submit" class="btn btn-primary form-control" value="Graficar">
      </div>
   </div>
</form>
<br>
<div id="myfirstchart" style="height: 250px; width"></div>
<script type="text/javascript">
	$(document).ready(function(){
		graphics.init();
	});
</script>

@stop