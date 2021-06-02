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
    
          <ul class="list-group" id="periodos">
            {{-- <li class="list-group-item d-flex justify-content-between align-items-center">
              MONICAAAAA
    
              <span class="badge bg-success rounded-pill">
                <a href="/students/1/qualifications/1" 
                  style="color: white">Ver Calificaciones</a> 
              </span>
              
            </li> --}}
            @foreach($student->periods as $period)
            {{-- <li class="list-group-item d-flex justify-content-between align-items-center">
              {{$period->name}}
    
              <span class="badge bg-success rounded-pill">
                <a href="/students/{{ $student->id }}/qualifications/{{ $period->id }}" 
                  style="color: white">Ver Calificaciones</a> 
              </span>
              
            </li> --}}
            @endforeach
          </ul>
      </div>    
  
    </form>

    <script>

      fetch('/students/{{$student->id}}/periods')
        .then(response => response.json())
        .then(data =>  { 
          var html = ""
          data.forEach((element) => {
                html += `  <li class="list-group-item d-flex justify-content-between align-items-center">
              `+ element.name +`
                    <span class="badge bg-success rounded-pill">
                      <a href="/students/{{$student->id}}/qualifications/`+element.id+`" 
                        style="color: white">Ver Calificaciones</a> 
                    </span>
                    
                  </li>`
          }); 
          document.getElementById("periodos").innerHTML = html;
        })
        // var data = '<li class="list-group-item d-flex justify-content-between align-items-center" <span class="badge bg-success rounded-pill"> <a href="/students/1/qualifications/1"  style="color: white">Ver Calificaciones</a>  </span> </li>'


    </script>
@endsection
