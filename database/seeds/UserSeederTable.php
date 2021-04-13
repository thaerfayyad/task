<?php

use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
           'name'  => 'thaer',
           'email'       => 'thaer@app.com',
           'password'    =>bcrypt('10201020'),
        ]);

    }
}
