<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
            [
                "id" => 1,
                "title" => "HTML",
                "slug" => "html",
                "created_at" => Carbon::now(),
                "updated_at" => "2022-06-01 10:00:00",
            ],
            [
                "id" => 2,
                "title" => "CSS",
                "slug" => "css",
                "created_at" => Carbon::now(),
                "updated_at" => "2022-06-01 10:00:00",
            ],
            [
                "id" => 3,
                "title" => "Javascript",
                "slug" => "javascript",
                "created_at" => Carbon::now(),
                "updated_at" => "2022-06-01 10:00:00",
            ],
            [
                "id" => 4,
                "title" => "PHP",
                "slug" => "php",
                "created_at" => Carbon::now(),
                "updated_at" => "2022-06-01 10:00:00",
            ]
            ]
        );
    }
}
