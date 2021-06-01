@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <br>
            <form action="">
              <input type="search" name="name" class="form-control input-text" placeholder="Buscar estudiante">
            </form>
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
            <td>{{ $student->last_name}}</td>
            <td>{{$student->name }}</td>
            <td class="d-flex">
              <div>
                <a href="/students/{{$student->id}}/edit" class="btn btn-outline-success mx-1"> editar </a>
              </div>
              <div>
                <a href="/students/{{$student->id}}" class="btn btn-outline-info mx-1"> ver </a>
              </div>
              <form action="/students/{{ $student->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-outline-danger " type="submit"> Delete </button>
              </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      

@endsection