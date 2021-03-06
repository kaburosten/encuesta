@extends ('admin/layout')

@section ('title')Encuesta de Alumnos @stop

@section ('content')

<h1>Lista de usuarios</h1>
  
  <table class="table table-striped">
    <tr>
        <th>Full name</th>
        <th>Email</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->full_name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
  </table>

@stop