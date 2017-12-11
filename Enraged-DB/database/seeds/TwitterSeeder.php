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

        $twitterItem = Twitter::make([
            'twitter_name'  => 'theDonaldDrumpf',
            'twitter_id'    => 1234567,
            'analysis_val'  => $faker->randomFloat(7, 7, 10),
            'mi_val'        => $faker->randomFloat(7, 7, 10),
            'sentiment_val' => $faker->randomFloat(7, -10, 3),
            'media_val'     => $faker->randomFloat(7, -8, 10),
            'tweet_count'   => $faker->numberBetween(10, 500),
            'protect'       => false,
            'processed'     => false,
        ]);
        $twitterItem->save();

        for ($i = 0; $i < 100; $i++) {
            $follows = Twitter::make([
                'twitter_name'  => $faker->firstName . $faker->lastName,
                'twitter_id'    => $faker->numberBetween(1, 1000000),
                'analysis_val'  => $faker->randomFloat(7, -10, 10),
                'mi_val'        => $faker->randomFloat(7, -10, 10),
                'sentiment_val' => $faker->randomFloat(7, -10, 10),
                'media_val'     => $faker->randomFloat(7, -10, 10),
                'tweet_count'   => $faker->numberBetween(10, 500),
                'protect'       => false,
                'processed'     => false,
            ]);
            $follows->save();
            $twitterItem->follows()->attach($follows->id);
        }

        for ($i = 0; $i < 200; $i++) {
            $follows = Twitter::make([
                'twitter_name'  => $faker->firstName . $faker->lastName,
                'twitter_id'    => $faker->numberBetween(1, 1000000),
                'analysis_val'  => $faker->randomFloat(7, 2, 10),
                'mi_val'        => $faker->randomFloat(7, 2, 10),
                'sentiment_val' => $faker->randomFloat(7, -10, 4),
                'media_val'     => $faker->randomFloat(7, 4, 10),
                'tweet_count'   => $faker->numberBetween(10, 500),
                'protect'       => false,
                'processed'     => false,
            ]);
            $follows->save();
            $twitterItem->follows()->attach($follows->id);
        }

        $twitterItem->processed = true;
        $twitterItem->save();
    }
}
