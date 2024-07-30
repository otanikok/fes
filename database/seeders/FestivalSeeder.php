<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FestivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('festivals')->insert([
                'name' => 'フジロック',
                'overview' => '説明',
                'date'=>'7/26~7/29',
                'image_url'=>'',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
