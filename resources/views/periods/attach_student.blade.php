@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/periods/{{ $period->id }}"> Back</a>
    </div>
    <div class="col-8">
        <h3> Inscribir alumno a Periodo: {{ $period->name }}</h3> <br>
    </div>
</div>
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-md-12">
              <select name="user_id" required>
                @foreach($students as $student)
                  <option value="{{ $student->id }}">{{ $student->name . " " .  $student->last_name }}</option>
                @endforeach
              </select>
              
            </div>
            <div class="form-group col-md-12">
              
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
                      
        </div> <br> 
    </form>

     
@endsection