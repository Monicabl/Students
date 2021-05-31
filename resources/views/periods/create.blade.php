@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/periods/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Agregar nuevo periodo </h2> <br>
    </div>
</div>
    <form action="" method="POST">
      @csrf
        <div class="row">
            <div class="form-group"> <br>
              <label> Nombre </label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del periodo" required>
            </div>
              <div class="form-group col-md-6">
                <label> Inicio </label>
                <input type="text" class="form-control" id="" name="" placeholder="Fecha de inicio" required>
              </div>
              <div class="form-group col-md-6">
                <label> Fin </label>
                <input type="text" class="form-control" id="" name="" placeholder="Fecha de finalización" required>
              </div>
        </div> <br> 
        <button class="btn btn-primary" type="submit"> Agregar </button>  
    </form>
@endsection