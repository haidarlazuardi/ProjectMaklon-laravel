<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'PRO',
            'role'       => 'Admin',
            'email'     => 'adminpro@gmail.com',
            'password'  => Hash::make('12345678'),
            'remember_token' => Hash::make('adminnutrifood2')

        ]);
    }
}
