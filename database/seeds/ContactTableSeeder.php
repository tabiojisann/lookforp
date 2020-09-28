<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 50; $i++)
        {
            Contact::create(
                [
                    'id'   => $i,
                    'name' => 'ユーザー' . $i . '号',
                    'email' => 'test' . $i . '@gmail.com',
                    'text' => '私は' . $i . '才の男性です',
                ]
            );
        };
    }
}
