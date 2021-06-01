@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/students/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Estudiante: {{$student->id}} </h2> <br>
    </div>
</div>
    <form action="">
      <div class="row">
          <div class="form-group col-md-6">
              <label> Matricula  </label>
              <input clastype="text" class="form-control"  id="" name="" placeholder="{{$student->id}}" disabled required>
            </div>
            <div class="form-group col-md-6">
              <label>Correo </label>
              <input type="text" class="form-control" id="" name="" placeholder="{{$student->email}}" disabled required>
            </div>
          <div class="form-group col-md-6">
            <label> Apellidos</label>
            <input type="text" class="form-control" id="" name="" placeholder="{{$student->last_name}}" disabled required>
          </div>
          <div class="form-group col-md-6">
            <label> Nombre </label>
            <input type="text" class="form-control" id="" name="" placeholder="{{$student->name}}" disabled required>
          </div>
        <div class="form-group"> <br>
          <label> Descripción </label>
          <input type="text" class="form-control" id="" name="" placeholder="{{$student->description}}"  disabled required>
        </div>
      </div> <br> 

          <h3>Periodos</h3>
    
          <ul class="list-group">
            @foreach($student->periods as $period)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{$period->name}}
    
              <span class="badge bg-success rounded-pill">
                <a href="/students/{{ $student->id }}/qualifications/{{ $period->id }}" 
                  style="color: white">Ver Calificaciones</a> 
              </span>
              
            </li>
            @endforeach
          </ul>
      </div>    
  
    </form>
@endsection