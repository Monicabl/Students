<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Rocky';
        $user->last_name = 'Barboa';
        $user->email = 'rocky@gmail.com';
        $user->user_type = User::TYPE_STUDENT;
        $user->save();

        $user = new User;
        $user->name = 'Chato';
        $user->last_name = 'Colocho';
        $user->email = 'chato@gmail.com';
        $user->user_type = User::TYPE_STUDENT;
        $user->save();

        $user = new User;
        $user->name = 'Monica';
        $user->last_name = 'Elizabeth';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('secret');
        $user->user_type = User::TYPE_ADMIN;
        $user->save();
    }
}
