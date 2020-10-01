<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        DB::table('users')->insert([
            [
                'id'    =>  1,
                'name' => 'テストユーザー',
                'email' => 'a@gmail.com',
                'password' => bcrypt('aaaaaaaa'),
                'remember_token' => bcrypt('secret'),
                'sex' => '男性',
                'age' => 25,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'    =>  2,
                'name' => '毛利',
                'email' => 'aa@gmail.com',
                'password' => bcrypt('aaaaaaaa'),
                'remember_token' => bcrypt('secret'),
                'sex' => '女性',
                'age' => 32,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'    =>  3,
                'name' => 'ゆかぼん',
                'email' => 'aaa@gmail.com',
                'password' => bcrypt('aaaaaaaa'),
                'remember_token' => bcrypt('secret'),
                'sex' => '女性',
                'age' => 22,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'    =>  4,
                'name' => 'シュラマン',
                'email' => 'b@gmail.com',
                'password' => bcrypt('aaaaaaaa'),
                'remember_token' => bcrypt('secret'),
                'sex' => '男性',
                'age' => 19,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'    =>  5,
                'name' => 'みシュラんマン',
                'email' => 'bb@gmail.com',
                'password' => bcrypt('aaaaaaaa'),
                'remember_token' => bcrypt('secret'),
                'sex' => '男性',
                'age' => 23,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id'    =>  6,
                'name' => '椿椿',
                'email' => 'bbb@gmail.com',
                'password' => bcrypt('aaaaaaaa'),
                'remember_token' => bcrypt('secret'),
                'sex' => '女性',
                'age' => 30,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        for($i = 7; $i <= 10; $i++)
        {
            User::create(
                [
                    'id'             => $i,
                    'name'           => 'テストユーザー' . $i,
                    'email'          => 'user'. $i . '@gmail.com',
                    'password'       => bcrypt('aaaaaaaa'),
                    'remember_token' => bcrypt('secret'),
                    'sex'            => '男性',
                    'age'            => $i,
                    'created_at'     => date('Y-m-d H:i:s'),
                    'updated_at'     => date('Y-m-d H:i:s'),
                ]
            );
        }

        for($i = 11; $i <= 20; $i++) 
        {
            User::create(
                [ 
                    'id'             => $i,
                    'name'           => 'テストユーザー' . $i,
                    'email'          => 'test'. $i . '@gmail.com',
                    'password'       => bcrypt('aaaaaaaa'),
                    'remember_token' => bcrypt('secret'),
                    'sex'            => '女性',
                    'age'            => $i,
                    'created_at'     => date('Y-m-d H:i:s'),
                    'updated_at'     => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 21; $i <= 25; $i++) 
        {
            User::create(
                [ 
                    'id'             => $i,
                    'name'           => 'テストユーザー' . $i,
                    'email'          => 'test'. $i . '@gmail.com',
                    'password'       => bcrypt('aaaaaaaa'),
                    'remember_token' => bcrypt('secret'),
                    'sex'            => '男性',
                    'age'            => $i,
                    'created_at'     => date('Y-m-d H:i:s'),
                    'updated_at'     => date('Y-m-d H:i:s'),
                ]
            );
        };

        for($i = 26; $i <= 30; $i++) 
        {
            User::create(
                [ 
                    'id'             => $i,
                    'name'           => 'テストユーザー' . $i,
                    'email'          => 'test'. $i . '@gmail.com',
                    'password'       => bcrypt('aaaaaaaa'),
                    'remember_token' => bcrypt('secret'),
                    'sex'            => '男性',
                    'age'            => $i,
                    'created_at'     => date('Y-m-d H:i:s'),
                    'updated_at'     => date('Y-m-d H:i:s'),
                ]
            );
        };
 
    }
}
