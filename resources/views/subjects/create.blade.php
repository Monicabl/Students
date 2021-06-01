@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/subjects/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Agregar materia: </h2> <br>
    </div>
</div>
    <form action="/subjects" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label> Materia </label>
                <input type="text" class="form-control"  id="name" name="name" value="" placeholder="materia" required>
            </div>
            <div class="form-group col-md-6">
                <label> Descripcion </label>
                <input type="text" class="form-control" id="description" name="description" value="" placeholder="descripsion" required>
            </div>
        </div>     <br>
        <button class="btn btn-primary" type="submit"> Agregar </button>  
    </form>
@endsection