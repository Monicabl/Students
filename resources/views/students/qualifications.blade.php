@extends('layouts.base')
@section('content')
<br>
<div class="row"> 
    <div class="col-1">
        <a class="btn btn-outline-success" href="/students/"> Back</a>
    </div>
    <div class="col-8">
        <h2> Estudiante: {{ $student->id }} </h2> <br>
        <h2> Periods: {{ $period->name }} </h2> <br>
    </div>
</div>
    <form action="/students/{{ $student->id }}/qualifications/{{ $period->id }}" method="POST">
        @csrf        
     
        <table>
            <thead>
                <tr>
                    <th scope="col">--</th>
                    <th scope="col">Calificaciones</th>                    
                  </tr>
            </thead>

            <tbody>
                @foreach ($period->subjects as $subject)
                    
                    <tr>
                        <th>{{ $subject->name }} </th>
                        <td><input 
                                type="number" 
                                name="subject_{{$subject->id}}"
                                value="{{ $student->getQualification($subject->id, $period->id)->score }}"
                            >
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       <button type="submit" class="btn btn-primary my-3">Guardar Calificaciones</button>
    </form>
@endsection