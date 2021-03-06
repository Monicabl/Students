@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/students/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Editar estudiante: {{$student->name}} </h2> <br>
    </div>
</div>
    <form action="/students/{{$student->id}}" method="POST">
      @csrf
      @method('put')
        <div class="row">
            <div class="form-group col-md-6">
                <label> Matricula </label>
                <input clastype="text" class="form-control"  id="" name="" placeholder="{{$student->id}}" disabled required>
              </div>
              <div class="form-group col-md-6">
                <label> Correo </label>
                <input type="text" class="form-control" id="email" name="email" value="{{$student->email}}" placeholder="@ correo" required>
              </div>
            <div class="form-group col-md-6">
              <label> Apellidos</label>
              <input type="text" class="form-control" id="last_name" name="last_name" value="{{$student->last_name}}"placeholder="Apellidos" required>
            </div>
            <div class="form-group col-md-6">
              <label> Nombre </label>
              <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" placeholder="Nombre" required>
            </div>
          <div class="form-group"> <br>
            <label> Descripción </label>
            <input type="text" class="form-control" id="description" name="description" value="{{$student->description}}" placeholder="Descripción" required>
          </div>
        </div> <br> 
        <button class="btn btn-primary" type="submit"> Agregar </button>  
    </form>
@endsection