<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        $faker = \Faker\Factory::create();

        // This is for random seeder library
        foreach(range(1,50) as $index)
        {
            Event::create([
                'name' => $faker->sentence(2),
                'city' => $faker->city,
                'venue' => $faker->company,
                'description' => $faker->paragraph(1, true),
            ]);
        }

        // This is for seeder library
        /* Event::create([
            'name' => "Laravel and Coffee",
            'city' => "Dublin",
            'venue' => "Cup of Joe",
            'description' => "Let's learn laravel together!"
        ]);

        Event::create([
            'name' => "IoT and the Raspberry Pi",
            'city' => "Columbus",
            'venue' => "Columbus Library",
            'description' => "Weather monitoring with the Pi"
        ]); */
    }
}
