@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-8">
          <form action="">
            <br>
              <input type="search" name="name" class="form-control input-text" placeholder="Buscar materia">
            </form>
        </div>
        <div class="col">
            <br>
            <a class="btn btn-outline-primary" href="/subjects/create">Agregar nueva materia</a>
        </div>
    </div>

    <table class="table table-hover"> <br>
        <thead>
          <tr>
            <th scope="col">Materia</th>
            <th scope="col">Nombre </th>
            <th scope="col">Descripcion</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($subjects as $subject)
          <tr>
            <th>{{$subject->id}}</th>
            <td> {{$subject->name}} </td>
            <td> {{$subject->description}} </td>
                <td class="d-flex">
                  <div>
                    <a href="/subjects/{{$subject->id}}/edit" class="btn btn-outline-success mx-1"> editar </a>
                  </div>

                  <form action="/subjects/{{$subject->id}}" method="POST">
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