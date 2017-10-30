<?php

use App\ServiceUser;
use Illuminate\Database\Seeder;

class ServiceUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('service_users')->delete();
        $workerUser = ServiceUser::create([
            'service_name' => 'Worker',
            'password' => bcrypt('ERExjM0rVvcC7zfJvSbU'),
        ]);
        $workerUser->save();
    }
}
