@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/students/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Estudiante:  </h2> <br>
    </div>
</div>
    <form action="">
        <div class="row">
            <div class="form-group col-md-6">
                <label> Matricula </label>
                <input clastype="text" class="form-control"  id="" name="" placeholder="matricula" disabled required>
              </div>
              <div class="form-group col-md-6">
                <label> Correo </label>
                <input type="text" class="form-control" id="" name="" placeholder="@ correo" disabled required>
              </div>
            <div class="form-group col-md-6">
              <label> Apellidos</label>
              <input type="text" class="form-control" id="" name="" placeholder="Apellidos" disabled required>
            </div>
            <div class="form-group col-md-6">
              <label> Nombre </label>
              <input type="text" class="form-control" id="" name="" placeholder="Nombre" disabled required>
            </div>
          <div class="form-group"> <br>
            <label> Descripción </label>
            <input type="text" class="form-control" id="" name="" placeholder="Descripción"  disabled required>
          </div>
        </div> <br> 
    </form>
@endsection