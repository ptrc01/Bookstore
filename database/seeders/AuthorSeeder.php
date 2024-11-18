<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors =[
            [
                'name' => 'Kerri Maniscalco',
                'photo' => 'images/authors/kerriManiscalco.jpg',
            ],
            [
                'name' => 'Wallis Kinney',
                'photo' => 'images/authors/wallis.jpg',
            ],
            [
                'name' => 'Sabaa Tahir',
                'photo' => 'images/authors/sabaa.jpg',
            ],
            [
                'name' => 'Emily Varga',
                'photo' => 'images/authors/emily.webp',
            ],
            [
                'name' => 'Shaina Lu',
                'photo' => 'images/authors/emily.webp',
            ],
            [
                'name' => 'Sam',
                'photo' => 'images/authors/sam.webp',
            ],


        ];

        DB::table('authors')->insert($authors);
    }
}
