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
                    @foreach ($period->parcials as $parcial)                        
                        <th scope="col">{{ $parcial->name }}</th>                    
                    @endforeach
                  </tr>
            </thead>

            <tbody>
                @foreach ($period->subjects as $subject)
                    
                    <tr>
                        <th>{{ $subject->name }} </th>
                        @foreach ($period->parcials as $parcial)     

                            <td><input 
                                    type="number" 
                                    name="subject_{{$subject->id}}parcial_{{ $parcial->id }}"
                                    value="{{ $student->getQualificationScore($subject->id, $parcial->id) }}" required
                                >
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
       <button type="submit" class="btn btn-primary my-3">Guardar Calificaciones</button>
    </form>
@endsection