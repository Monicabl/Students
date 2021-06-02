<?php

namespace App\Http\Controllers;

use App\Parcial;
use App\Period;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ParcialController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($period_id)
    {
        $period = Period::find($period_id);
        return view('parcials.create')->with('period', $period);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($period_id, Request $request)
    {
        $parcial = new Parcial();
        $parcial->period_id = $period_id;
        $parcial->name = $request->get('name');
        $parcial->beginning = $request->get('beginning');
        $parcial->end = $request->get('end');
        $parcial->save();
        return redirect('/periods/'. $period_id);


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $parcial_id)
    {
        $parcial = Parcial::find($parcial_id);
        $parcial->delete();
        return redirect('/periods/'. $id);
    }

}