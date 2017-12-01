<?php

use App\Twitter;
use Illuminate\Database\Seeder;

class TwitterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('twitters')->delete();

        $twitterItem = Twitter::create([
            'name'          => 'test',
            'twitterID'     => 'test2',
            'analysis_val'  => $faker->randomFloat(7, -10, 10),
            'mi_val'        => $faker->randomFloat(7, -10, 10),
            'sentiment_val' => $faker->randomFloat(7, -10, 10),
            'media_val'     => $faker->randomFloat(7, -10, 10),
            'tweet_count'   => $faker->numberBetween(10, 500),
            'protect'       => false,
            'processing'    => false,
        ]);
        $twitterItem->save();
    }
}
