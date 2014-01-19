@extends ('admin/layout')

@section ('title')Encuesta de Alumnos @stop

@section ('content')
<div class="row">
    <form action="" role="form" class="form-inline" id="enviar-email">
        <div class="form-group col-md-3">
            <label for="">Enviar email</label>
            <select name="status" id="" class="form-control">
                <option value="0">Todos</option>
                <option value="PENDIENTE">pendientes</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="">Periodo</label>
            <input type="text" class="form-control" placeholde="Periodo">
        </div>
        <div class="form-group col-md-1">
            <label for=""></label>
            <input type="submit" value="Enviar" class="btn btn-default">
        </div>
    </form>
</div>

<h1>Lista de alumnos</h1>
  
  <table class="table table-striped">
    <thead>    
        <tr>
            <th>Email</th>
            <th>Nombre</th>
            <th>Género</th>
            <th>Carrera</th>
            <th>Materia</th>
            <th>Maestro</th>
            <th>Periodo</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->alm_email }}</td>
            <td>{{ $alumno->alm_fullname }}</td>
            <td>{{ $alumno->alm_genero }}</td>
            <td>{{ $alumno->alm_carerra }}</td>
            <td>{{ $alumno->alm_materia }}</td>
            <td>{{ $alumno->alm_maestro }}</td>
            <td>{{ $alumno->alm_periodo }}</td>
            <td><span class="label {{ $alumno->alm_status == 'PENDIENTE' ? 'label-warning' : 'label-success' }}">{{$alumno->alm_status}}</span></td>
            <td>
                {{HTML::link(route('admin.alumnos.edit',$alumno->id), 'Editar', array('class' =>'btn btn-info'))}}
            </td>
            <td>

                {{ Form::model($alumno, array('route' => array('admin.alumnos.destroy', $alumno->id), 'method' => 'DELETE', 'role' => 'form')) }}
                        {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{$alumnos->links()}}

  {{HTML::link('admin/alumnos/create', 'Agrear', array('class' => 'btn btn-primary'));}}

<script type="text/javascript">
    $(document).ready(function(){
        main.enviarMails();
    });
</script>

@stop