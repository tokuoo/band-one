<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
        DB::table('users')->insert([
                'name' => '平澤',
                'email' => 'oku@gmail.com',
                'password' => 'okt20076',
                'age' => '22',
                'gender' => '男性',
                'part_main' => 'ロック',
                'favorite_artist' => 'one ok rock',
                'image_url' => '画像',
                'team' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
        ]);
        }

}
