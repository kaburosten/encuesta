@extends ('admin/layout')

@section ('title') Crear Usuarios @stop

@section ('content')

<h1>Graficas</h1>

<div id="myfirstchart" style="height: 250px; width"></div>
<script type="text/javascript">
	$(document).ready(function(){
		graphics.init();
	});
</script>

@stop