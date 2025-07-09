<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            'name' => 'Delgertje',
            'first' => 'Jeroen',
            'last' => 'Delger',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('authors')->insert([
            'name' => 'Hank',
            'first' => 'Henk',
            'last' => 'De Vries',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('authors')->insert([
            'name' => 'Jantje',
            'first' => 'Jan',
            'last' => 'Jansen',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
    
    }
}
