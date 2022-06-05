<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                "id" => 1,
                "name" => "Rifka Uli Siregar",
                "email" => "rifka@gmail.com",
                "email_verified_at" => Carbon::now(),
                'password' => Hash::make('rifkauli', [
                    'memory' => 1024,
                    'time' => 2,
                    'threads' => 2,
                ]),
                "created_at" => Carbon::now(),
                "updated_at" => "2022-06-01 10:00:00",
            ]
        );
    }
}
