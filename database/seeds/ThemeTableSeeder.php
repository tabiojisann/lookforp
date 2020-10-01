<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Theme;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            [
                'id' => 1,
                'title' => 'ちょっと怒ってください',
                'admin_id' => 1,
                'apply'    => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);

        for($i = 2; $i <=5; $i++) 
        {
            Theme::create(
                [
                    'id'         => $i,
                    'title'      => $i . '歳がいいそうなことを教えてください',
                    'admin_id'   => 1,
                    'apply'      => false, 
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        };
        
    }
}
