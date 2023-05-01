<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'title' => 'プロ志向',
                'body' => '楽器、音楽に触れてきた方募集中！',
                'place' => '東北地方',
                'recruit_nummbers' => '2',
                'recruit_part' => 'ギター',
                'genre' => '女性',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}