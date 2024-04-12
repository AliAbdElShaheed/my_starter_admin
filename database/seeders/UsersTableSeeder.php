<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name' => 'super_admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('password'),
            'type' => 'super_admin',
        ]);

        $user->attachRole('super_admin');


        $user = User::create([
            'name' => 'Ali Mohammed',
            'email' => 'ali@app.com',
            'password' => bcrypt('123412341234'),
        ]);
        $user->attachRole('super_admin');

    }//end of run

}//end of seeder
