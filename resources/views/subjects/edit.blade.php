@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/subjects/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Editar materia: {{$subject->name}} </h2> <br>
    </div>
</div>
    <form action="/subjects/{{ $subject->id}}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="form-group col-md-6">
                <label> Materia </label>
                <input type="text" class="form-control"  id="name" name="name" value="{{$subject->name}}" placeholder="matricula" required>
            </div>
            <div class="form-group col-md-6">
                <label> Descripcion </label>
                <input type="text" class="form-control" id="description" name="description" value="{{$subject->description}}" placeholder="@ correo" required>
            </div>
        </div>     <br>
        <button class="btn btn-primary" type="submit"> Agregar </button>  
    </form>
@endsection