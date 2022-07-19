<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PodcastCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('podcast_categories')->insert([
            'category_name' => 'SERMONS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'FINANCES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'RELATIONSHIPS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'HACKS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'YOUNG GENERALS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'UNDER 40 MILLIONARES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'STORIES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'INSPIRATIONAL QOUTES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('podcast_categories')->insert([
            'category_name' => 'MUSLIM TEACHINGS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
