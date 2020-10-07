<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 4; $i++) 
        {
            DB::table('keeps')->insert(
                [
                    'id' => $i,
                    'article_id' => 4,
                    'user_id' => $i + 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }

        for($i = 5; $i <= 9; $i++) 
        {
            DB::table('keeps')->insert(
                [
                    'id' => $i,
                    'article_id' => 5,
                    'user_id' => $i + 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }

        for($i = 10; $i <= 15; $i++) 
        {
            DB::table('keeps')->insert(
                [
                    'id' => $i,
                    'article_id' => 6,
                    'user_id' => $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }

        
    
        

    }
}
