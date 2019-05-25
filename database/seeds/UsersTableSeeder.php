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
        $user = new User();
        $user->name = "Baturman Şen";
        $user->email = "baturman@gmail.com";
        $user->password = bcrypt("4514532");
        $user->save();
    }
}
