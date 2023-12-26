<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    protected static ?string $password;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert(
            // [
            //     'name' => 'Super Admin',
            //     'email' => 'admin@gmail.com', 'password' => static::$password ??= Hash::make('password'),
            //     'user_type' => 'admin',
            // ],
            // [
            //     'name' => 'Saim',
            //     'email' => 'saimkhalifa2@gmail.com', 'password' => static::$password ??= Hash::make('12345678'),
            //     'user_type' => 'user',
            // ]
        );
    }
}
