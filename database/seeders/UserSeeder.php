<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fernando',
            'phone' => '55156137',
            'email' => 'ottoferfer@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')
        ]);
        User::create([
            'name' => 'Gabriela',
            'phone' => '59335042',
            'email' => 'gabita@gmail.com',
            'profile' => 'EMPLEADO',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')
        ]);
    }
}
