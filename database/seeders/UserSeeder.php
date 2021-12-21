<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "test";
        $user->email = "example@example.com";
        $user->password = '$2y$10$f8EeZ0nWtwFaECWuwhIYJuCB7I.JtMuFZAr34VXvYMU83x5C/Q10q';
        $user->role = 3;
        $user->save();

        $user = new User();
        $user->name = "Wicher";
        $user->email = "wicher@wicher.nl";
        $user->password = '$2y$10$f8EeZ0nWtwFaECWuwhIYJuCB7I.JtMuFZAr34VXvYMU83x5C/Q10q';
        $user->role = 2;
        $user->save();
    }
}
