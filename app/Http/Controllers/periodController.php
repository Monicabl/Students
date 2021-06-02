<?php

namespace App\Http\Controllers;

use App\Period;
use App\Subject;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $periods = Period::all();
        $periods = Period::where('name','like',"%{$request->name}%")->get();
        return view('periods.index')->with(['periods' => $periods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $period = New Period();
        $period->name = $request->get('name');
        $period->beginning = $request->get('beginning');
        $period->end = $request->get('end');
        $period->save();
        return redirect('/periods');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $period = Period::find($id);
        return view('periods.show')->with('period', $period);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $period = Period::find($id);
        return view('periods.edit')->with('period', $period);
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
        $period = Period::Find($id);
        $period->name = $request->get('name');
        $period->beginning = $request->get('beginning');
        $period->end = $request->get('end');
        $period->save();
        return redirect('/periods');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $period = Period::find($id);
        $period->delete();
        return redirect('/periods');
    }

    

    // VINCULANDO STUDIANTES
    public function attachStudentView($id)
    {
        $period = Period::find($id);
        $students = User::where('user_type', User::TYPE_STUDENT)
                ->whereDoesntHave('periods', function (Builder $query) use ($id ) {
                    $query->where('id', $id);
                })->get();
                // ->whereDoesntHave('periods')->get();
        // $students = User::where('user_type', 'estudiante')
        //         ->whereDoesntHave('periods')->pluck('id');


        return view('periods.attach_student')->with([
            'students' => $students,
            'period' => $period
        ]);
    }

    public function attachStudent($id, Request $request)
    {
        $period = Period::find($id);
        // $belongsToManyStudents = $period->students(); // (new BelongsToMany)
        // $belongsToManyStudents->attach($request->user_id);
        $period->students()->attach($request->get('user_id'));
        return redirect('periods/'. $id);
    }
    public function detachStudent($id, $student_id)
    {
        $period = Period::find($id);
        $period->students()->detach($student_id);
        return back();
    }

    public function attachSubjectView($id)
    {
        $period = Period::find($id);
        $subjects = Subject::whereDoesntHave('periods', function (Builder $query) use ($id ) {
                    $query->where('id', $id);
                })->get();
                // ->whereDoesntHave('periods')->get();
        // $students = User::where('user_type', 'estudiante')
        //         ->whereDoesntHave('periods')->pluck('id');


        return view('periods.attach_subject')->with([
            'subjects' => $subjects,
            'period' => $period
        ]);
    }

    public function attachSubject($id, Request $request)
    {
        $period = Period::find($id);
        $period->subjects()->attach($request->get('subject_id'));
        return redirect('periods/'. $id);
    }
    public function detachSubject($id, $subject_id)
    {
        $period = Period::find($id);
        $period->subjects()->detach($subject_id);
        return back();
    }

}
