<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $model = User::create([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
        ]);



        DB::table('page')->insert([
            'name' => Str::random(10),
            'pageText' => Str::random(100),
            'user_id' => $model->id
        ]);
    }
}
