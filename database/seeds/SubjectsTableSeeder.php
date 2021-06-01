<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = new Subject();
        $subject->name = 'Matematicas';
        $subject->description = 'III';
        $subject->save();

        $subject = new Subject();
        $subject->name = 'Ingles';
        $subject->description = 'V';
        $subject->save();
        
        $subject = new Subject();
        $subject->name = 'Español';
        $subject->description = 'V';
        $subject->save();
    }
    
}
