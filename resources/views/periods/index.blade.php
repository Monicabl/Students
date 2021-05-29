@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <br>
                <input type="search" class="form-control input-text" placeholder="Buscar estudiante">
        </div>
        <div class="col">
            <br>
            <a class="btn btn-outline-primary" href="/periods/create">Agregar nuevo Periodo</a>
        </div>
    </div>

    <table class="table table-hover"> <br>
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Inicio</th>
            <th scope="col">Fin</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($periods as $period)
          <tr>
            <th scope="row">{{ $period->name }}</th>
            <td>{{ $period->beginning }}</td>
            <td>{{ $period->end }}</td>
            <td>
                <a href="/periods/{{ $period->id }}/edit" class="btn btn-outline-success"> editar </a>
                <a href="" class="btn btn-outline-danger">eliminar</a>
                <a href="/periods/{{ $period->id }}" class="btn btn-outline-info"> ver </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      

@endsection