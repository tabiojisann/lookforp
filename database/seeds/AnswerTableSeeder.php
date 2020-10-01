<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Answer;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 5; $i++) 
        {
            Answer::create(
                [ 
                    'id' => $i,
                    'text' => '回答' . $i,
                    'user_id'  =>  $i,
                    'theme_id'  =>  $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 6; $i <= 20; $i++) 
        {
            Answer::create(
                [
                    'id'         => $i,
                    'text' => '回答' . $i,
                    'user_id'  =>  6,
                    'theme_id'  =>  1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };

    }
}
