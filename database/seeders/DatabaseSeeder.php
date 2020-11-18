<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@gmail.com',
            'type' => 1,
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Kestutis Ulevskis',
            'email' => 'kestutis@gmail.com',
            'type' => 0,
            'password' => Hash::make('worker'),
        ]);

        DB::table('users')->insert([
            'name' => 'Benonas Kateiva',
            'email' => 'benovas@gmail.com',
            'type' => 0,
            'password' => Hash::make('worker'),
        ]);

        DB::table('users')->insert([
            'name' => 'Valentinas Kavaliauskas',
            'email' => 'valentinas@gmail.com',
            'type' => 0,
            'password' => Hash::make('worker'),
        ]);

        DB::table('users')->insert([
            'name' => 'Janas Kazlaukas',
            'email' => 'janas@gmail.com',
            'type' => 0,
            'password' => Hash::make('worker'),
        ]);

        Task::factory()
            ->times(15)
            ->create();
    }
}
