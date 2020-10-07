<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 1; $i <= 3; $i++) 
        {
            Article::create(
                [ 
                    'id'         =>  $i,
                    'title'      => '漫才のボケ募集',
                    'text'       => '漫才のボケを募集しています',
                    'position'   => 'ボケ',
                    'style'      => '漫才',
                    'user_id'    =>  $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 4; $i <= 6; $i++) 
        {
            Article::create(
                [ 
                    'id'         => $i,
                    'title'      => 'コントのツッコミ募集',
                    'text'       => 'コントのツッコミを募集しています',
                    'position'   => 'ツッコミ',
                    'style'      => 'コント',
                    'user_id'    =>  $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 7; $i <= 10; $i++) 
        {
            Article::create(
                [ 
                    'id'         => $i,
                    'title'      => 'コントの作家募集',
                    'text'       => 'コントの作家を募集しています',
                    'position'   => '作家',
                    'style'      => 'コント',
                    'user_id'    =>  $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 11; $i <= 13; $i++) 
        {
            Article::create(
                [ 
                    'id'         => $i,
                    'title'      => '漫才のツッコミ募集',
                    'text'       => '漫才のツッコミを募集しています',
                    'position'   => 'ツッコミ',
                    'style'      => '漫才',
                    'user_id'    =>  $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 14; $i <= 15; $i++) 
        {
            Article::create(
                [ 
                    'id'         => $i,
                    'title'      => 'コントのボケ募集',
                    'text'       => 'コントのボケを募集しています',
                    'position'   => 'ボケ',
                    'style'      => 'コント',
                    'user_id'    =>  $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 16; $i <= 20; $i++) 
        {
            Article::create(
                [ 
                    'id'         => $i,
                    'title'      => '漫才の作家募集',
                    'text'       => '漫才の作家を募集しています',
                    'position'   => '作家',
                    'style'      => '漫才',
                    'user_id'    =>  $i,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };
    
    }
}


