<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate(); // Always remove the table before we start. Start clean!

        $faker = \Faker\Factory::create(); // Allow us to create fake data...

        for ($i=0; $i < 10 ; $i++) {
            Movie::create([
                'title' => $faker->sentence,
                'synopsis' => $faker->paragraph,
                'year' => $faker->randomDigit,
                'cover' => $faker->sentence,
            ]);
        }
    }
}
