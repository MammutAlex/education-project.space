<?php

use App\Direction;
use Illuminate\Database\Seeder;

class DirectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Direction::create([
            'url' => 'children',
            'photo' => 'images/img-1.jpg',
            'title' => 'Діти',
        ]);
        Direction::create([
            'url' => 'schoolchildren',
            'photo' => 'images/img-1.jpg',
            'title' => 'Школярі',
        ]);
        Direction::create([
            'url' => 'students',
            'photo' => 'images/img-1.jpg',
            'title' => 'Студенти',
        ]);
        Direction::create([
            'url' => 'draduate-students',
            'photo' => 'images/img-1.jpg',
            'title' => 'Aспіранти',
        ]);
        Direction::create([
            'url' => 'teachers',
            'photo' => 'images/img-1.jpg',
            'title' => 'Викладачі',
        ]);
    }
}
