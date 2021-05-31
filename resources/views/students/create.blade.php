@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/students/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Agregar nuevo estudiante: </h2> <br>
    </div>
</div>
    <form action="/students" method="POST">
      @csrf
        <div class="row">
            {{-- <div class="form-group col-md-6">
                <label> Matricula </label>
                <input type="text" class="form-control" id="id" name="id" placeholder="matricula" required>
              </div> --}}
              <div class="form-group col-md-6">
                <label> Correo </label>
                <input type="text" class="form-control" id="email" name="email" placeholder="@ correo" required>
              </div>
            <div class="form-group col-md-6">
              <label> Apellidos</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" required>
            </div>
            <div class="form-group col-md-6">
              <label> Nombre </label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
            </div>
          <div class="form-group"> <br>
            <label> Descripción </label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descripción" required>
          </div>
        </div> <br> 
        <button class="btn btn-primary" type="submit"> Agregar </button>  
    </form>
@endsection