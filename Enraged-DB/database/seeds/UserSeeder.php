<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $workerUser = User::create([
            'name' => 'Worker',
            'password' => bcrypt('ERExjM0rVvcC7zfJvSbU'),
        ]);
        $workerUser->save();
    }
}
