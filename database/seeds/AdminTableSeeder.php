<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::unguard();

        Admin::create([
            'name' => 'Admin', 'email' => 'example@mail.com', 'password' => bcrypt('secret_password'),
        ]);

        Admin::reguard();
    }
}
