<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Movies = [
            [
                'name' => 'Learners Licence',
                'director' => 'R299.99',
                'poster' => 'pics/Learnerspapers.jpg',
                'price' => 300
            ],
            [
                'name' => 'Light Vehicle Rental',
                'director' => 'R799.99',
                'poster' => 'pics/code8.jpg',
                'price' => 800
            ],
            [
                'name' => 'Light Truck Rental',
                'director' => 'R999.99',
                'poster' => 'pics/code10.jpg',
                'price' => 1000
            ],
            [
                'name' => 'Heavy Truck Rental',
                'director' => 'R1749.99',
                'poster' => 'pics/code14.jpg',
                'price' => 1800
            ],
            [
                'name' => '10 Code08 Lessons',
                'director' => 'R1799.99',
                'poster' => 'pics/womandriving.jpg',
                'price' => 1800
            ],
            [
                'name' => '10 Code10 Lessons',
                'director' => 'R1999.99',
                'poster' => 'pics/smalltrucklesson.jpg',
                'price' => 2000
            ],
            [
                'name' => '10 Code14 Lessons',
                'director' => 'R3499.99',
                'poster' => 'pics/truck14lesson.jpg',
                'price' => 3500
            ]
        ];
        foreach ($Movies as $key => $value) {
            Movie::create($value);
        }
    }
}
