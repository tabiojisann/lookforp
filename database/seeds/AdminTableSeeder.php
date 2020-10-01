<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([ 
            [
                'id'    =>  1,
                'name'      => '管理ユーザー',
                'email'      => config('admin.email'),
                'password' => bcrypt(config('admin.password')),
                'remember_token' => bcrypt('secret'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s') 
            ],
        ]);
    }
}
