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
    <form action="/periods/{{$period->id}}" method="POST">
      @csrf
      @method('put')
        <div class="row">
            <div class="form-group"> <br>
              <label> Nombre </label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $period->name }}" required>
            </div>
              <div class="form-group col-md-6">
                <label> Inicio </label>
                <input type="date"  class="form-control" id="beginning" name="beginning" value="{{ $period->beginning }}" required>
              </div>
              <div class="form-group col-md-6">
                <label> Fin </label>
                <input type="text" class="form-control" id="end" name="end" value="{{ $period->end }}" required>
              </div>
        </div> <br> 
        <button class="btn btn-primary" type="submit"> Agregar </button>  
    </form>
@endsection