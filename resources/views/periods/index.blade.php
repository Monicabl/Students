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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
                <a href="/students/edit" class="btn btn-outline-success">editar</a>
                <a href="" class="btn btn-outline-danger">eliminar</a>
                <a href="/students/show" class="btn btn-outline-info"> ver </a>
            </td>
          </tr>
          
        </tbody>
      </table>
      

@endsection