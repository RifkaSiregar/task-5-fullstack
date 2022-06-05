<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_post')->insert(
            [
                "category_id" => 1,
                "post_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => "2022-06-01 10:00:00",
            ]
            );
    }
}
