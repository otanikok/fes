<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
                'title' => 'タイトルタイトル',
                'body' => '内容',
                'user_id'=>1,
                'artist_id'=>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
