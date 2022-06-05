<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                "user_id" => 1,
                "title" => "Apa itu HTML",
                "slug" => "apa-itu-html",
                "thumbnail" => "html.jpg",
                "description" => "Hypertext Markup Language",
                "content" => "sample",
                "status" => "PUBLISH",
                "created_at" => Carbon::now(),
                "updated_at" => "2022-06-01 10:00:00",
            ]
        );
    }
}
