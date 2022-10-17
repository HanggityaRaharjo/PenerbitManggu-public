<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'admin1',
        	'level'=>'admin1',
        	'email'=>'admin1@gmail.com',
        	'password'=>bcrypt('12345678')

        ]);
    }
}
