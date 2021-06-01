<?php

use App\Parcial;
use App\Period;
use App\User;
use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                
        $period = new Period;
        $period->name = '2021 Enero - Junio';
        $period->beginning = '2021/01/01';
        $period->end = '2021/05/01';
        $period->save();
        
        $period->students()->attach(1);  

        $period->subjects()->attach(1);
        $period->subjects()->attach(2);
        $period->subjects()->attach(3);
        
        $parcial = new Parcial;
        $parcial->period_id = $period->id;
        $parcial->name = 'Enero - Febrero';
        $parcial->beginning = '2021/01/01';
        $parcial->end = '2021/02/01';
        $parcial->save();

        $parcial = new Parcial;
        $parcial->period_id = $period->id;
        $parcial->name = 'Febrero - Marzo';
        $parcial->beginning = '2021/03/01';
        $parcial->end = '2021/04/01';
        $parcial->save();
        
        // SEGUNDO PERIODOOOOOOOO

        $period = new Period;
        $period->name = '2020 Septiembre - Diciembre';
        $period->beginning = '2020/09/01';
        $period->end = '2021/12/01';
        $period->save();

        $period->students()->attach(1);
    }
}
