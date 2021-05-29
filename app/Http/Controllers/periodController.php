<?php

namespace App\Http\Controllers;

use App\Period;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class periodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periods = Period::all();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // VINCULANDO STUDIANTES
    public function attachStudentView($id)
    {
        $period = Period::find($id);
        $students = User::where('user_type', 'estudiante')->whereDoesntHave('periods', function (Builder $query) use ($id) {
            $query->where('id', $id);
        })->get();

        return view('periods.attach_student')->with([
            'students' => $students,
            'period' => $period
        ]);
    }

    public function attachStudent($id, Request $request)
    {
        $period = Period::find($id);
        $period->students()->attach($request->user_id);
        return redirect('periods/'. $id);
    }
    public function detachStudent($id, $student_id)
    {
        $period = Period::find($id);
        $period->students()->detach($student_id);
        return back();
    }
}
