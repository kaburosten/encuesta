<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Depto. Servicio de encuestas</h2>

		<div>
			Estimado Alumno(a): {{$alumno['alm_fullname']}}<br>

			Te invitamos a contestar la siguiente encuesta.
			{{ URL::to('client/inquest/code', array($alumno['alm_code'])) }}.<br>
		</div>
	</body>
</html>