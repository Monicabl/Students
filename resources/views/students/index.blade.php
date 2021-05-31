@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <br>
                <input type="search" class="form-control input-text" placeholder="Buscar estudiante">
        </div>
        <div class="col">
            <br>
            <a class="btn btn-outline-primary" href="/students/create">Agregar nuevo estudiante</a>
        </div>
    </div>

    <table class="table table-hover"> <br>
        <thead>
          <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
          <tr>
            <th scope="row">{{ $student->id}}</th>
            <td>{{ $student->name}}</td>
            <td>{{$student->last_name }}</td>
            <td>
                <a href="/students/{{$student->id}}/edit" class="btn btn-outline-success"> editar </a>
                <a href="" class="btn btn-outline-danger">eliminar</a>
                <a href="/students/{{$student->id}}" class="btn btn-outline-info"> ver </a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      

@endsection