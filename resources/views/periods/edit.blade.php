@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/periods/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Editar periodo: {{ $period->name }} </h2> <br>
    </div>
</div>
    <form action="">
        <div class="row">
            <div class="form-group"> <br>
              <label> Nombre </label>
              <input type="text" class="form-control" id="" name="" value="{{ $period->name }}" required>
            </div>
              <div class="form-group col-md-6">
                <label> Inicio </label>
                <input type="text" class="form-control" id="" name="" value="{{ $period->beginning }}" required>
              </div>
              <div class="form-group col-md-6">
                <label> Fin </label>
                <input type="text" class="form-control" id="" name="" value="{{ $period->end }}" required>
              </div>
        </div> <br> 
        <button class="btn btn-primary"> Agregar </button>  
    </form>
@endsection