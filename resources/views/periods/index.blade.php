@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-8">
          <form action="">
            <br>
                <input type="search" name="name" class="form-control input-text" placeholder="Buscar periodo">
          </form>
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
            <td class="d-flex">
              <div>
                <a href="/periods/{{ $period->id }}/edit" class="btn btn-outline-success mx-1"> editar </a>
              </div>
              <div>
                <a href="/periods/{{ $period->id }}" class="btn btn-outline-info"> ver </a>
              </div>
              <form action="/periods/{{$period->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-outline-danger mx-1 " type="submit"> Delete </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      

@endsection