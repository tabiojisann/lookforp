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
        DB::table('articles')->insert([ 
            [
                'id'       =>  1,
                'title'    => '人気の記事',
                'text'     => '今晩わ',
                'position' => 'ツッコミ',
                'style'    => '漫才',
                'user_id'  =>  1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'       =>  2,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => 'ツッコミ',
                'style'    => '漫才',
                'user_id'  =>  1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'       =>  3,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => 'ボケ',
                'style'    => '漫才',
                'user_id'  =>  1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'       =>  4,
                'title'    => '二番目の女',
                'text'     => 'テストですからね',
                'position' => 'ボケ',
                'style'    => 'コント',
                'user_id'  =>  1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'       =>  5,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => '作家',
                'style'    => 'コント',
                'user_id'  =>  1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'       =>  6,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => '作家',
                'style'    => 'その他',
                'user_id'  =>  2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'       =>  7,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => 'その他',
                'style'    => 'その他',
                'user_id'  =>  3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'       =>  8,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => '作家',
                'style'    => 'その他',
                'user_id'  =>  3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'       =>  9,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => 'ボケ',
                'style'    => 'その他',
                'user_id'  =>  5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'       =>  10,
                'title'    => 'テスト投稿',
                'text'     => 'テストですからね',
                'position' => 'ボケ',
                'style'    => 'その他',
                'user_id'  =>  6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        for($i = 11; $i < 100; $i++) 
        {
            Article::create(
                [ 
                    'id' => $i,
                    'title' => $i . '番目の投稿',
                    'text' => $i . '番目の投稿',
                    'position' => 'ボケ',
                    'style'    => 'その他',
                    'user_id'  =>  5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };
    
    }
}


