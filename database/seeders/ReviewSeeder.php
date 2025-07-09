<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'book_id' => '1',
            'review' => 'Een goed boek over de lange history van fruit',
            'author_id' => '1'
        ]);

        DB::table('reviews')->insert([
            'book_id' => '2',
            'review' => 'Zo zie je weer waar het vandan komt',
            'author_id' => '3'
        ]);

        DB::table('reviews')->insert([
            'book_id' => '1',
            'review' => 'De cliffhanger na act 3 is EPIC',
            'author_id' => '3'
        ]);

        DB::table('reviews')->insert([
            'book_id' => '3',
            'review' => 'Bevat vooral veel humor!',
            'author_id' => '3'
        ]);

        DB::table('reviews')->insert([
            'book_id' => '2',
            'review' => 'De biologie van de appel is facinerend',
            'author_id' => '2'
        ]);

        DB::table('reviews')->insert([
            'book_id' => '3',
            'review' => 'Ik wacht op deel 2 waar de auteur verteld waarom de banaan geel is',
            'author_id' => '2'
        ]);
    }
}
