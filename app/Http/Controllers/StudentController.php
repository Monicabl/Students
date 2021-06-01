<?php

namespace App\Http\Controllers;

use App\Period;
use App\Qualification;
use App\User;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {   $students = User::where('user_type', User::TYPE_STUDENT)
                    ->where('name','like',"%{$request->name}%")->get(); //solo muestra al usuario
    // {   $students = User::where([
    //         ['name', 'like', "%{$request->name}%"],
    //         ['user_type', User::TYPE_STUDENT]
    //     ])->get(); //solo muestra al usuario
        return view('students.index')->with(['students' => $students]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new User();
        $student->last_name = $request->get('last_name');
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->user_type = 'estudiante';
        // $student->description = $request->get('description');
        $student->save();
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $student = User::find($id);
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::find($id);
        return view('students.edit')->with('student', $student);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = User::find($id);
        $student->last_name = $request->get('last_name');
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->user_type = 'estudiante';
        // $student->description = $request->get('description');
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        return redirect('/students');
        //
    }

    public function qualificationsView($id, $period_id)
    {
        $student = User::find($id);
        $period = Period::find($id);
        return view('students.qualifications')->with([
            'student' => $student,
            'period' => $period
        ]);
    }

    public function qualificationsSave($id, $period_id, Request $request)
    {
        $student = User::find($id);
        $period = Period::find($id);

        $qualifications = [];

        $request =  $request->all() ;
        foreach ($period->subjects as $subject) {

            $qualification = Qualification::where('user_id', $id)
                        ->where('period_id', $period_id)
                        ->where('subject_id', $subject->id)->first();

            if(! $qualification) {
                $qualification = new Qualification;
                $qualification->subject_id = $subject->id;
                $qualification->period_id = $period_id;
                $qualification->user_id = $id;
            }

            $qualification->score =  $request['subject_'. $subject->id];
            $qualification->save();

            
        }

        return back()->with('msj', 'Calificaciones actualizadas');
    }
}
