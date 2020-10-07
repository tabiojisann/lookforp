<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 8; $i++) 
        {
            DB::table('likes')->insert(
                [
                    'id' => $i,
                    'answer_id' => 1,
                    'user_id' => $i + 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }

        for($i = 9; $i <= 14; $i++) 
        {
            DB::table('likes')->insert(
                [
                    'id' => $i,
                    'answer_id' => 7,
                    'user_id' => $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }

        for($i = 15; $i <= 19; $i++) 
        {
            DB::table('likes')->insert(
                [
                    'id' => $i,
                    'answer_id' => 9,
                    'user_id' => $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }

        for($i = 20; $i <= 22; $i++) 
        {
            DB::table('likes')->insert(
                [
                    'id' => $i,
                    'answer_id' => 8,
                    'user_id' => $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }

        for($i = 23; $i <= 24; $i++) 
        {
            DB::table('likes')->insert(
                [
                    'id' => $i,
                    'answer_id' => 12,
                    'user_id' => $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
