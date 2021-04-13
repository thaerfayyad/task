<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $admin = \App\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('10201020'),
        ]);
    }
}

