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
       DB::table('twitters')->delete();
        $twitterItem = Twitter::create([
            'name' => 'test',
            'twitterID' => 'test2',
            'pol_var' => 2,
            'lib_var' => 1,
            'protect' => false
        ]);
        $twitterItem->save();
    }
}
