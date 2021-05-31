@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/periods"> Back</a>
    </div>
    <div class="col-8">
        <h2> Periodo: {{ $period->name }}</h2> <br>
    </div>
</div>
    <form action="">
        <div class="row">
            <div class="form-group col-md-12">
              <label> Nombre </label>
              <input clastype="text" class="form-control"  value="{{ $period->name }}" placeholder="matricula" disabled required>
            </div>
            <div class="form-group col-md-6">
              <label> Inicio </label>
              <input type="text" class="form-control" value="{{ $period->beginning }}" placeholder="@ correo" disabled required>
            </div>
            <div class="form-group col-md-6">
              <label> Final</label>
              <input type="text" class="form-control" value="{{ $period->end }}" placeholder="Apellidos" disabled required>
            </div>            
        </div> <br> 
    </form>

    <div class="row"> 
      <div class="col-1">
          <a class="btn btn-link" href="/periods/{{ $period->id }}/parcials/create"> Agregar</a>
      </div>
      <div class="col-8">
        <h3>Periodos</h3>
      </div>
    </div>    

    <ul class="list-group">
      @foreach($period->parcials as $parcial)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $parcial->name }}
        <span class="badge bg-danger rounded-pill">
          <a href="/periods/{{ $period->id }}/detach-student/{{ $parcial->id }}" 
            style="color: white">Eliminar</a> 
        </span>
      </li>
      @endforeach
    </ul>

    <div class="row"> 
      <div class="col-1">
          <a class="btn btn-link" href="/periods/{{ $period->id }}/attach-student"> Agregar</a>
      </div>
      <div class="col-8">
        <h3>Alumnos Inscritos</h3>
      </div>
    </div>    

    <ul class="list-group">
      @foreach($period->students as $student)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $student->name . " " . $student->last_name }}
        <span class="badge bg-danger rounded-pill">
          <a href="/periods/{{ $period->id }}/detach-student/{{ $student->id }}" 
            style="color: white">Eliminar</a> 
        </span>
      </li>
      @endforeach
    </ul>
@endsection