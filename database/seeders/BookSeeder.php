<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Sinaasappel VS de mandarijn',
            'summary' => 'Het eeuwige gevecht tussen de sinaasappel en de mandarijn',
            'author_id' => '2'
        ]);

        DB::table('books')->insert([
            'title' => 'Appel en de boom',
            'summary' => 'Een boek over appels die van een boom vallen',
            'author_id' => '1'
        ]);

        DB::table('books')->insert([
            'title' => 'De Banaan',
            'summary' => 'Een kort verhaal over waarom bananen krom zijn',
            'author_id' => '2'
        ]);
    }
}
